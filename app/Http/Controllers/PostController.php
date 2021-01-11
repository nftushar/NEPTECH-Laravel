<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{

    function show()
    {
       $data =  Post::all();
         return view('admin.list',['AllPosts'=>$data]);
    }
  
    
   function delete(Request $request, $id)
   {
       DB::table('posts')->where('id', $id)->delete();
       $request->session()->flash('msg', 'Data Delete');
       return redirect('PostList');
   }
   

    
            function ValueShow($id)
            {
                $data= Post::find($id); 
                // print_r($data);
                return view('admin.edit',compact('data'));
                
            }

   function update(Request $request)
   {
    $request->validate([
        'title'       => 'required',
        'short_desc'  => 'required',
        'lond_desc'   => '',
        'image'       => 'required|image',
        'post_date'   => ''
    ]);

    if($request->hasFile('image')){

                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $file = time() . '.' . $ext;
                $image->move('uploads/post', $file);
    }
                $data = array(
                'title' => $request->input('title'),
                'short_desc' => $request->input('short_desc'),
                'lond_desc' => $request->input('lond_desc'),
                'image' => $file,
                'post_date' => date('Y-m-d'),
                'status' => 1,
                'added_on' => date('Y-m-d')
            );
       
// print_r($data);

            $request->session()->flash('msg', 'post Update');
            return redirect('PostList');
            // return back()->with('msg','Update');

            
            $data_update= DB::table('posts')->insert($data);
            if($data_update){
                echo"Upp";
            }else{
                echo"Can not";
            }
            $request->session()->flash('msg', 'page UUUUUPP');
            return redirect('PostList');
   }

    function submit(Request $request)
    {
        $request->validate([
            'title'       => 'required',
            'short_desc'  => 'required',
            'lond_desc'   => '',
            'image'       => 'required|mimes:jpg,jpeg,png',
            'post_date'   => 'required'
        ]);

        $image = $request->file('image');
        $ext = $image->extension();
        $file = time() . '.' . $ext;
        $image->move('uploads/post', $file);



        $data = array(
            'title' => $request->input('title'),
            'short_desc' => $request->input('short_desc'),
            'lond_desc' => $request->input('lond_desc'),
            'image' => $file,
            'post_date' => $request->input('post_date'),
            'status' => 1,
            'added_on' => date('Y-m-d')
        );

       $data_save= DB::table('posts')->insert($data);

            $request->session()->flash('msg', 'page saved');
            return redirect('PostList');
    
    }

}
