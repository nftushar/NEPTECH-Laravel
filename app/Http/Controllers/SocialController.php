<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Sociallink;


class SocialController extends Controller
{

    function show()
    {
        // return view('front.layout.layout');
        // echo"Hello";
        $data =  Sociallink::all();
        // echo($data);
          return view('front.layout.layout',['AllSociallink'=>$data]);
        //   return view('front.index',['AllSociallink'=>$data]);
     }

     function listing()
     {
         $data =  Sociallink::all();
         // echo($data);
           return view('admin.sociallink.sociallink_list',['AllSociallink'=>$data]);
      }
      
       
     function delete(Request $request, $id)
    {
        // echo"Delete";
       $d = DB::table('sociallinks')->where('id', $id)->delete();
    //    print_r($d);
        $request->session()->flash('msg', 'Data Delete');
        return redirect('sociallink-list');
    }
 
    function submit(Request $request)
    {    
    //  echo"Hello"; 
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
    //  dd($data);
    // echo" $data";
      $data_save = DB::table('sociallinks')->insert($data);
 //  dd($data_save);
      if($data_save){
          echo"data seved";
      }else{
         echo"data not seved";
      }
    //   $request->session()->flash('msg', 'List saved');
    //   return redirect('sociallink-add');

    }
}
