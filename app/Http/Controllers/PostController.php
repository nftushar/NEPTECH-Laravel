<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    function show()
    {
       $data =  Post::all();
         return view('admin.list',['AllPosts'=>$data]);
    }
function AnotherShow(){
  $data =  Post::all();
  return view('front.bloganother',['AnotherPosts'=>$data]);

}
   function delete(Request $request, $id)
   { 
       File::delete(public_path("post/$file"));

       DB::table('posts')->where('id', $id)->delete();
       $request->session()->flash('msg', 'Data Delete');
       return redirect('PostList');
   }
   
 

    function submit(Request $request)
    {    
      $request->validate([
        'title'       => 'required',
        'short_desc'  => 'required',
        'lond_desc'   => 'required',
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
              'status' => 1,
              'added_on' => $request->input('added_on'),
              'post_date' => $request->input('post_date')
          );

          $data_save = DB::table('posts')->insert($data);
              session()->flash('successmsg', 'Post Added successfully');
              return redirect('PostList');
    }


    function ValueShow($id)
    {
        $data= Post::find($id); 
        return view('admin.edit',compact('data'));  
    }
            // update post 
   function update(Request $request, $id)
   {
        $request->validate([
            'title'       => 'required',
            'short_desc'  => 'required',
            'lond_desc'   => 'required',
        ]);

        $data_update= Post::find($id);
        $data_update->title      = $request->input('title');
        $data_update->short_desc = $request->input('short_desc');
        $data_update->lond_desc  = $request->input('lond_desc');
        $data_update->post_date  = $request->input('post_date');
        $data_update->status     = 1;
        $data_update->added_on   = date('Y-m-d');
        $unlinkImage = $data_update->image;

      if($request->has('image')){
          $request->validate([
            'image'       => 'image',
          ]);
          unlink(public_path('uploads/post/'.$unlinkImage));
        $image = $request->file('image');
        $ext = $image->extension();
        $file = time() . '.' . $ext;
        $image->move('uploads/post', $file);
        $data_update->image = $file;
      }
      $data_update->update();

      session()->flash('successmsg', 'Updated successfully');
      return redirect('PostList');
    
    }


    // search

    function search(){

      $data =  Post::all();
       return view('front.blog',['SearchPosts'=>$data]);



    }





}
