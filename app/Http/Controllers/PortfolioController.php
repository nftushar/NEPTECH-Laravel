<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    function listing()
    {
        // echo"Helloxx";
        $data =  Portfolio::all();
        // dd($data);
          return view('admin.Portfolio.Portfolio_list',['Allportfolio'=>$data]);
     }

     function show()
     {
        //  echo"Hello";
         $data =  Portfolio::all();
        //   echo($data);
        return view('front.portfolio',['Allportfolio'=>$data]);
    
      }
      
    
   function delete(Request $request, $id)
   {
    //    echo"Delete";
       DB::table('portfolios')->where('id', $id)->delete();
       $request->session()->flash('msg', 'Data Delete');
       return redirect('portfolio-list');
   }

   function submit(Request $request)
   {    
    // echo"Hello"; 
     $request->validate([
         'title' => 'required',
         'short_desc' => 'required',
         'image' => 'required',
         'link' => 'required',
         'colour' => 'required',
      
     ]);
            $image = $request->file('image');
            $ext = $image->extension();
            $file = time() . '.' . $ext;
            $image->move('uploads/portfolio', $file);

            $data = array(
                'title' => $request->input('title'),
                'short_desc' => $request->input('short_desc'),           
                'image' => $file,
                'link' => $request->input('link'),
                'colour' => $request->input('colour'),
                
            );

    // dd($data);

     $data_save = DB::table('portfolios')->insert($data);
//  dd($data_save);
    //  if($data_save){
    //      echo"data seved";
    //  }else{
    //     echo"data not seved";
    //  }
     $request->session()->flash('msg', 'List saved');
     return redirect('portfolio-list');
   
   }
}
