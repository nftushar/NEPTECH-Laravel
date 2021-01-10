<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Leader;


class LeaderController extends Controller
{
    
    function listing()
    {
        // echo"Hello";
        $data =  Leader::all();
        // dd($data);
          return view('admin.leader.leader_list',['AllLeader'=>$data]);
        //   return view('front.about',['AllLeader'=>$data]);
     }

 
     function show()
     {
         // echo"Hello";
         $data =  Leader::get();
        //  dd($data);
        //    return view('front.about',['AllLeader'=>$data]);
      }
   function delete(Request $request, $id)
   {
    //    echo"Delete";
       DB::table('leaders')->where('id', $id)->delete();
       $request->session()->flash('msg', 'Data Delete');
       return redirect('leader-list');
   }

   function submit(Request $request)
   {   

     $request->validate([
         'name' => 'required',
         'image' => 'required',
         'position' => 'required',
     ]);
                // echo"Hello";
                $image = $request->file('image');
                $ext = $image->extension();
                $file = time() . '.' . $ext;
                $image->move('uploads/leader', $file);

    $data = array(
        'name' => $request->input('name'),
        'image' => $file,
        'position' => $request->input('position'),
        'facebook' => $request->input('facebook'),
        'linkedin' => $request->input('linkedin'),
        'twitter' => $request->input('twitter'),
        'envelope' => $request->input('envelope')
    );

    // dd($data);

     $data_save= DB::table('leaders')->insert($data);
//  dd($data_save);
    //  if($data_save){
    //      echo"data seved";
    //  }else{
    //     echo"data not seved";
    //  }
     $request->session()->flash('msg', 'Data saved');
     return redirect('leader-add');
   
   }
}