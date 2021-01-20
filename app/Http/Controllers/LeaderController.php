<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Leader;


class LeaderController extends Controller
{
    
    function listing()
    {
        $data =  Leader::all();
          return view('admin.leader.leader_list',['AllLeader'=>$data]);
     }

 
     function show()
     {
         $data =  Leader::get();
      }
   function delete(Request $request, $id)
   {
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

     $data_save= DB::table('leaders')->insert($data);

     $request->session()->flash('msg', 'Data saved');
     return redirect('leader-list');
   
   }

   function ValueShow($id)
    {
        $data= Leader::find($id); 
        // dd($data);
        return view('admin.Leader.Leader_edit',compact('data'));  
    }
   
   function update(Request $request, $id)
   {
    //  echo"Update";
        $request->validate([
          'name' => 'required',
          'image' => 'required',
          'position' => 'required',
        ]);
        // dd('$request');

        $data_update= Leader::find($id);
        $data_update->name      = $request->input('name');
        $data_update->position = $request->input('position');
        $data_update->facebook = $request->input('facebook');
        $data_update->linkedin = $request->input('linkedin');
        $data_update->twitter = $request->input('twitter');
        $data_update->envelope = $request->input('envelope');
        $unlinkImage = $data_update->image;

 
      if($request->has('image')){
          $request->validate([
            'image'       => 'mims:jpg,phg.gif',
          ]);
          unlink(public_path('uploads/leader/'.$unlinkImage));
        $image = $request->file('image');
        $ext = $image->extension();
        $file = time() . '.' . $ext;
        $image->move('uploads/leader', $file);
        $data_update->image = $file;
      }
      $data_update->update();
      session()->flash('msg', 'Updated successfully');
      return redirect('leader-list');
    
    }

   
}