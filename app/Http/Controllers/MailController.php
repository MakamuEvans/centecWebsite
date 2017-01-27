<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function mail(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'phone'=>'required',
            'message' => 'required',
            //'image'=>'mimes:jpeg,jpg,png,gif|required|max:10000'

        ]);
        $name = $request->name;
        $from =$request->email;
        $subject =$request->subject;
        $message=$request->message;
        $phone= $request->phone;

        // Create the email and send the message
        /*$to = 'makamuevans@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
        $email_subject = $subject;
        $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
        $headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
        $headers .= "Reply-To: $email_address";*/

        Mail::send('webmail',['name'=>$name,'email'=>$from,'comments'=>$message, 'subject'=>$subject, 'phone'=>$phone],function($message) use($from, $subject, $name){
            $message->to('test@sentecltd.com','ELm')->from($from)->subject($subject);
        });

        return redirect()->route('contact-us')
            ->with('status', "Message sucessfully sent. We will get back to you as Soon.");

    }
    public function contact(){
        return view('contact');
    }
    public function brochure(){
        $filename = 'bronchure.pdf';
        $path = url('img/bronchure.pdf');

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }
    public function catalog(){
        $filename = 'solarcatalog.pdf';
        $path = url('img/solarcatalog.pdf');

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }
}
