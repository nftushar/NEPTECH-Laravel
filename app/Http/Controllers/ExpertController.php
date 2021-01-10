<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Expert;
use App\Models\Leader;


class ExpertController extends Controller
{
    function listing()
    {
        $data =  Expert::all();
          return view('admin.expert.expert_list',['AllExpert'=>$data]);
     }

     function show()
     {
         $data =  Expert::all();
         $AllLeader =  Leader::all();
        return view('front.about',['AllExpert'=>$data, 'AllLeader'=>$AllLeader]);
    
      }
      
    
   function delete(Request $request, $id)
   {
       DB::table('experts')->where('id', $id)->delete();
       $request->session()->flash('msg', 'Data Delete');
       return redirect('expert-list');
   }

   function submit(Request $request)
   {    
    // echo"Hello"; 
     $request->validate([
         'name' => 'required',
         'image' => 'required',
         'position' => 'required',
        //  'facebook' => 'required',
        //  'linkedin' => 'required',
        //  'twitter' => 'required',
        //  'envelope' => 'required',
     ]);
            $image = $request->file('image');
            $ext = $image->extension();
            $file = time() . '.' . $ext;
            $image->move('uploads/expertTeam', $file);

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

     $data_save = DB::table('experts')->insert($data);
//  dd($data_save);
    //  if($data_save){
    //      echo"data seved";
    //  }else{
    //     echo"data not seved";
    //  }
    //  $request->session()->flash('msg', 'List saved');
     return redirect('expert-list');
   
   }

}
