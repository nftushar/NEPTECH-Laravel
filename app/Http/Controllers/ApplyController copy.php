<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Apply;
use App\Mail\ApplyMail;
// use Mail;  



class ApplyController extends Controller
{
    function show()
    {
        // echo'Hello';
        $data = Apply::all();
        // print_r($data);
         return view('admin.apply.apply_list',['AllApply'=>$data]);

    }
  
    
   function delete(Request $request, $id)
   {
    //    echo"Hello";
       DB::table('applys')->where('id', $id)->delete();
       $request->session()->flash('msg', 'Data Delete');
       return redirect('apply-list');
   }
 

   
        public function submit(Request $request)
        {
            // echo"hello";
            
                $request->validate([
                    'name'     => 'required',
                    'email'    => 'required',
                    'phone'    => 'required',
                    'subject'  => 'required',
                    'applyfor' => 'required',
                    'cv'       => 'required',
                    'portfolio'=> 'required',
                    'msg'      => ''
                ]);

                $cv = $request->file('cv')->store('uploads/cv');
                $cv = $request->file('cv');
                $ext = $cv->extension();
                $file = time() . '.' . $ext;
                $cv->storeAs('uploads/cv', $file);


                    $details = [
                        'name'      => $request->name,
                        'email'     => $request->email,
                        'phone'     => $request->phone,
                        'subject'   => $request->subject,
                        'applyfor'  => $request->applyfor,
                        'cv'        => $request->$file,
                        'portfolio' => $request->portfolio,
                        'msg'       => $request->msg,
                    ];

                
                      Mail::to('nftushar5200@gmail.com')->send(new ApplyMail($details));


                $apply = new Apply;
                $apply->name= $request->name;
                $apply->email= $request->email;
                $apply->phone= $request->phone;
                $apply->subject= $request->subject;
                $apply->applyfor= $request->applyfor;
                $apply->cv= $request->cv;
                $apply->portfolio= $request->portfolio;
                $apply->msg= $request->msg;
                $apply->save();
                return back()->with('message_sent', 'Successfully Applyed');
        }



}





