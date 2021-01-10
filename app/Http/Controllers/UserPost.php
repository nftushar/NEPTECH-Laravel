<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;


class UserPost extends Controller
{

    function show()
    {
      // $data['result']=DB::table('Post')->orderBy('id','desc')->get();
      // return view('front.blog',$data);
       $data =  Post::all();
         return view('front.blog',['UserPost'=>$data]);
    }
  
  


}





