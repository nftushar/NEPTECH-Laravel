<?php

namespace App\Http\Controllers; 
use App\Mail\contactMail;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Mail;


class contactController extends Controller
{
    public function contact()
    { 
        return view('front/bloganother');
    }

    public function sendEmail(Request $request)
    {
       
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'website' => 'required',
            'message' => 'required'
        ]);

         $details = [
               'name' =>    $request->name,
               'email' =>   $request->email,
               'website' => $request->website,
               'message' => $request->message,
         ];
         
        // $getMail = Contact::get();
        
        $a = Mail::to('nftushar5200@gmail.com')->send(new contactMail($details));

    //    foreach($getMail as $getMail){
    //    $a = Mail::to($getMail->email)->send(new contactMail($details));
    //    }
        // print_r($a);   


     $contactdata = new Contact;
     $contactdata->name= $request->name;
     $contactdata->email= $request->email;
     $contactdata->website= $request->website;
     $contactdata->message= $request->message;
     $contactdata->save();

     return back()->with('message_sent', 'message send successfully');
    }

    public function show( )
    {
        $data= contact::all();
        return view('admin/index', ['contactx'=>$data]); 
    }



}
