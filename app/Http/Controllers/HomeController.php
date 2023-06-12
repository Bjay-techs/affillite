<?php

namespace App\Http\Controllers; 
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Contacted;
class HomeController extends Controller
{
    public function index(){
        return view('home.welcome');

    }
     public function about(){
        return view('home.about');

    }
     public function contact(){
        return view('home.contact');

    }
      public function sendWelcomeEmail(Request $request){
          $name=$request->name;
          $sur=$request->sur;
          $email=$request->email;
          $phone=$request->phone;
        $message=$request->message;
          
          $contacted= new Contacted();
          $contacted->name=$name;
          $contacted->sur=$sur;
          $contacted->phone=$phone;
          $contacted->email=$email;
          $contacted->message=$message;
         if( $contacted->save()){
//              $to = 'sagemargo11@gmail.com';
// $subject = 'Message received well  ';
// $message = 'Hello, Your message to afonete have been received well.\n\n Our support team  will reach to you soon! \n\n
// Thank you for contacting us';
// $headers = 'From: infoafonete@gmail.com' . "\r\n
// ".'Reply-To: infoafonete@gmail.com' . "\r\n" .
//         'X-Mailer: PHP/' . phpversion();;

// $mailSent = mail($to, $subject, $message, $headers);

// if ($mailSent) {
return view('home.contact')->with('message','suceess');
// } else {
//     return view('home.contact')->with('message','email');
// }

         }
     else {
    return view('home.contact')->with('message','error');
}

    }
       public function project(){
        return view('home.project');

    }
    
}