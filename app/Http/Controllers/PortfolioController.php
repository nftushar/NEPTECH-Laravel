<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    function listing()
    {
        $data =  Portfolio::all();
          return view('admin.Portfolio.Portfolio_list',['Allportfolio'=>$data]);
     }

     function show()
     {
         $data =  Portfolio::all();
        return view('front.portfolio',['Allportfolio'=>$data]);
    
      }
      
    
   function delete(Request $request, $id)
   {
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

     $request->session()->flash('msg', 'List saved');
     return redirect('portfolio-list');
   
   }


   function edit($id)
   {
       $data= Portfolio::find($id); 
       return view('admin.portfolio.portfolio_edit',compact('data'));
       
   }



   function update(Request $request, $id)
   {
    $request->validate([
        'title' => 'required',
        'short_desc' => 'required',
        'image' => 'required',
        '' => 'required',
        'colour' => 'required',
     
    ]);

        $data_update= Post::find($id);
        $data_update->title      = $request->input('title');
        $data_update->short_desc = $request->input('short_desc');
        $data_update->link  = $request->input('link');
        $data_update->status     = 1;
        $unlinkImage = $data_update->image;



      if($request->has('image')){
          $request->validate([
            'image'       => 'mimes:jpg,png,jpeg,gif',
          ]);
          unlink(public_path('uploads/portfolio/'.$unlinkImage));
        $image = $request->file('image');
        $ext = $image->extension();
        $file = time() . '.' . $ext;
        $image->move('uploads/portfolio', $file);
        $data_update->image = $file;
      }
      $data_update->update();

      session()->flash('msg', 'Updated successfully');
      return redirect('portfolio-list');
    
    }
}
