<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;


class UserPost extends Controller
{

    function show()
    {
       $data =  Post::all();
    //    dd($data);
         return view('front.blog',['UserPost'=>$data]);

    }
    // function search(Request $request)
    // {
    
    //     $data = Post::select("title")
    //                 ->where("title","LIKE","%{$request->terms}%")
    //                 ->get();
    //         return response()->json($data);

    // }

            // public function search(Request $request){
            //     $title = $request->input('title');

            //     //now get all user and services in one go without looping using eager loading
            //     //In your foreach() loop, if you have 1000 users you will make 1000 queries

            //     $users = Post::with('services', function($query) use ($title) {
            //         $query->where('title', 'LIKE', '%' . $title . '%');
            //     })->get();

            //     return view('browse.search', compact('Posts'));
            // }
        public function search(Request $request){
            
            $res = Post::select("name")
            ->where("name","LIKE","%{$request->term}%")
            ->get();

              return response()->json($res);
        }
}
  
  