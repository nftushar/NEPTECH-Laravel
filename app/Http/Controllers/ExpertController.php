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

     $data_save = DB::table('experts')->insert($data);
     return redirect('expert-list');
   
   }

   function ValueShow($id)
   {
       $data= Expert::find($id); 
       return view('admin.expert.expert_edit',compact('data'));  
   }

   function update(Request $request, $id)
   {
      $request->validate([
        'name' => 'required',
        'image' => 'required',
        'position' => 'required',
      ]);

          $data_update= Expert::find($id);
          // dd($data_update);
          $data_update->name      = $request->input('name');
          $data_update->position = $request->input('position');
          $data_update->facebook = $request->input('facebook');
          $data_update->linkedin = $request->input('linkedin');
          $data_update->twitter = $request->input('twitter');
          $data_update->envelope = $request->input('envelope');
          $unlinkImage = $data_update->image;

  
          if($request->has('image')){
                $request->validate([
                  'image'       => 'image',
                ]);
                unlink(public_path('uploads/expertTeam/'.$unlinkImage));

              $image = $request->file('image');
              $ext = $image->extension();
              $file = time() . '.' . $ext;
              $image->move('uploads/expertTeam', $file);
              $data_update->image = $file;
          }
        $data_update->update();

        session()->flash('msg', 'Updated successfully');
        return redirect('expert-list');
    
    }

}
