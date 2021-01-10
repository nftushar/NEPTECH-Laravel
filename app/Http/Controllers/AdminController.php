<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    function login(Request $request){

        $request->validate([
            'username'     => 'required',
            'password'     => 'required|min:8',
           
        ]);

        $username=$request->input('username');
        $password=$request->input('password');


        $result=DB::table('admin')
        ->where('username',$username)
        ->where('password',$password)
        ->get();

        if(isset($result[0]->id)){
                   if($result[0]->status==1){
                       $request->session()->put('BLOG_USER_ID', $result[0]->id);
                       return redirect('PostList');

                   }else{
                                $request->session()->flash('msg', 'Account Deactivated');
                                return redirect('login');
        }

        }else{
             $request->session()->flash('msg', 'Please Enter Valid Login Details');
             return redirect('login');
        }
    }
}