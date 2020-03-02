<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;
use Mail;
use App\Mail\Contactusmailing;

class ContactController extends Controller
{
    //

     public function __construct(){
    $this->middleware('guest');
  }
    public function sendcontactinformation(Request $request){
    	 $sendername = $request->yourname;;
    	 $mobilenumber = $request->mobilenumber;
    	  $from = $request->email;
    	  $subject = $request->subject;
    	  $message = $request->message;
    	 //email details
    	 $to = 'francis.mkalama@gmail.com';
    	 $headers = 'From:'. $from. "\r\n" .
    		'Reply-To: webmaster@example.com' . "\r\n" ;

		 // mail($to, $subject, $message, $headers);

  //    $name = $request
    	// print_r($name);
    	// echo "passed";
    	 $emails = ['francis.mkalama@gmail.com'];
    	  Mail::send(['text'=>'mail.contactusmail'], [],function($message) {
    	   	$message->to('francis.mkalama@gmail.com','to francis')->subject('This is test e-mail');   
    	  });
      //    $message->to('francis.mkalama@gmail.com', 'Tutorials Point')->subject
      //       ('Laravel Basic Testing Mail');
      //    $message->from('xyz@gmail.com','Virat Gandhi');
      // });
      // echo "Basic Email Sent. Check your inbox.";
    }
}
