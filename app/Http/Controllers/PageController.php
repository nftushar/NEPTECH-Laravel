<?php
namespace App\Http\Controllers;
use App\Models\Page;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function listing()
    {
        $data =  Page::all();
          return view('admin.page.page_list',['AllPages'=>$data]);
     }

     function edit(Request $request, $id)
     {
         $data['result'] = DB::table('pages')->where('id', $id)->get();
 
         //$request->session()->flash('msg', 'Data Edited');
         return view('admin.page.page_edit', $data);
     }
     


     function submit(Request $request)
      {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:pages',
            'description' => 'required',
        ]);

 
 
         $data = array(
             'name' => $request->input('name'),
             // 'slug' => $request->input('slug'),
             'slug' => $request->input('slug'),
             'description' => $request->input('description'),
          
         );
 
        $data_save= DB::table('pages')->insert($data);
 
        $request->session()->flash('msg', 'page saved');
        return redirect('admin/page/page_list');
     
      }

      function delete(Request $request, $id)
      {
          DB::table('pages')->where('id', $id)->delete();
          $request->session()->flash('msg', 'Page Deleted');
          return redirect('admin/page/page_list');
      }
}

  

