<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Sociallink;


class SocialController extends Controller
{

    function show()
    {
        $data =  Sociallink::all();
          return view('front.layout.layout',['AllSociallink'=>$data]);
     }

     function listing()
     {
         $data =  Sociallink::all();
         // echo($data);
           return view('admin.sociallink.sociallink_list',['AllSociallink'=>$data]);
      }
      
       
     function delete(Request $request, $id)
    {
       $d = DB::table('sociallinks')->where('id', $id)->delete();
        $request->session()->flash('msg', 'Data Delete');
        return redirect('sociallink-list');
    }
 
    function submit(Request $request)
    {    
      $request->validate([
          'facebook' => 'required',
          'twitter' => 'required',
          'insta' => 'required',

      ]);
             $data = array(
                 'facebook' => $request->input('facebook'),
                 'twitter' => $request->input('twitter'),
                 'insta' => $request->input('insta'),     
             );


      $data_save = DB::table('sociallinks')->insert($data);
 //  dd($data_save);
   
      $request->session()->flash('msg', 'List saved');
      return redirect('sociallink-list');

    }

    function ValueShow($id)
    {
        $data= Sociallink::find($id); 
        return view('admin.sociallink.sociallink_edit',compact('data'));  
    }
    
   function update(Request $request, $id)
   {
        $request->validate([
            'facebook'       => 'required',
            'twitter'  => 'required',
            'insta'   => 'required',
        ]);

        $data_update= Sociallink::find($id);
        $data_update->facebook      = $request->input('facebook');
        $data_update->twitter = $request->input('twitter');
        $data_update->insta  = $request->input('insta');
 

      $data_update->update();

      session()->flash('successmsg', 'Updated successfully');
      return redirect('sociallink-list');
    
    }
}
