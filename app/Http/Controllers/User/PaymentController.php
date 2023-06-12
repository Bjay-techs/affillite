<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Payments;
use App\Models\Activations;
use Illuminate\Support\Facades\Mail;
use App\Mail\ActivationEmail;
use Blockonomics;
use Omnipay\Omnipay; 
use Illuminate\Support\Facades\Http;
class PaymentController extends Controller
{ 
    private $gateway;
        public function __construct() {
 
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId('AcidJBtn7-5f7F2p2Z_WHyk21-t2uLqJVfl3cJwOM-unt91NwODl03SbstXkqBCnnU9ZGQxA2Am0kIr0');
        $this->gateway->setSecret('EMureBBonD6dw4-mR9EiG0xSWhLXCqyIew_SFarmOf6WOKrS9Qc7HbP_RAo2ByhgDi1rYcIFGwaazZB6');
        $this->gateway->setTestMode(true);
    }
  public function blockpay(Request $request)
  {
 if($request->option=='crypto'){
// $api_key = '31T8xOus55ePakEZlzlgqUmZ5w34xcF5lJNPvIKqw7M';
  
   if($request->package=="fc1")
   {
      
//       $url = 'https://www.blockonomics.co/pay-url/b2ece55d990d487f'; // Replace with the desired URL

// header('Location: ' . $url);
// exit;
//   }

   if($request->package=="fc2"){
        $url = 'https://www.blockonomics.co/pay-url/d3feb4a19c9b4987'; // Replace with the desired URL

header('Location: ' . $url);
exit;
   }
     
 }

       if($request->option=='paypal'){
    //   return ('1');
        
     try {

       $response = $this->gateway->purchase(array(
                'amount' => $request->amount,
                'currency' => 'USD',
                'returnUrl' => url('success'),
                'cancelUrl' => url('error')
            ))->send();

      if ($response->isRedirect()) {
          $response->redirect();
      }
      else{
          return $response->getMessage();
      }

  } catch (\Throwable $th) {
      return $th->getMessage();
  }   
       }
      
  }
  }
 // paypal success
 public function success(Request $request)
    {
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ));

            $response = $transaction->send();

            if ($response->isSuccessful()) {

                $arr = $response->getData();

                // $payment = new Payments();
                // $payment->payment_id = $arr['id'];
                // $payment->payer_id = $arr['payer']['payer_info']['payer_id'];
                // $payment->payer_email = $arr['payer']['payer_info']['email'];
                // $payment->amount = $arr['transactions'][0]['amount']['total'];
                // $payment->currency = 'USD';
                // $payment->payment_status = $arr['state'];

                // $payment->save();
                $amm= $arr['transactions'][0]['amount']['total'];
                // $data=[
                //     'id'=>$arr['id'],
                //     'message'=>'You have successfull paid package of fc'. $arr['transactions'][0]['amount']['total'],
                // ];
              $pack='fc1';
              
                    // User is logged in
                    $user=Auth::user();
                    $userId = $user->id;
                    // Do something with the user ID
                 //   return( "Logged-in user ID:  . $userId");
                    $user = User::find($userId);
                    $email=$user->email;
                    
                 
                        if ($amm==100.00) {
                     $pack='fc1';
                     }
                     else{
                     $pack='fc2';
                     }
                    
                     $activation = $this->generateActivationCode(20);
         response()->json($activation);
                 
                   // $user->has_pai 
        // $user = Auth::user();
                       //$user->activation=$activation;d_package = '$pack';
                    $user->has_free_package = 'yes';
$user->save();
                    $activations= new activations();
                     $pack=$pack;
       // $userId = $user->id;
       // $given= $user->activation;
            $activations->code=$activation;
            $activations->package=$pack;
            $activations->stutus='not';
                   
                    // Save the changes to the database
                 if($activations->save())
      { 
        $send=$this->SendCode($email,$activation,$pack);
         response()->json($send);
         return redirect()->route('user.dashboard')->with('message','We have sent you an activation code, check your email');
                    //return view('user.dshboard');
                }
                else{
                     return redirect()->route('user.user-package')->with('message','Nothing selected, try again');
                 
                }
                  
            }
            else{
               return redirect()->route('user.dashboard')->with('message','payment declained, try again ');
                  
            }
        }
        else{
             return redirect()->route('user.dashboard')->with('message','We have sent you an activation code, check your email');
                    //return view('user.dshboard');
        }
    }

 //error paypal
 public function error()
    {
          return redirect()->route('user.dashboard')->with('message','Oppss, you declained the payment'); 
         
    }
 
  private  function generateActivationCode($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $code = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, strlen($characters) - 1);
        $code .= $characters[$randomIndex];
    }

    return $code;
}
  public function test(Request $request)
  {
    $secret = 'muhahe202023@';
     $txid = $request->txid;
    $value = $request->value;
    $status = $request->status;
    $addr = $request->addr;
$ceck=$request->secreate;

    // Match secret for security
    if ($request->secreate != $secret) {
      return view('user.user-package')->with('message','secrete not matching');
    }
$package=$value==100?'fc1':'fc2';
$pack=$value==100?'FC $100':'FC $200';
    // if ($request->status != 1) {
    //   //Only accept confirmed transactions
    //   return ('not');
    // } else {
     // return ('yes');
      $activation = $this->generateActivationCode(20);
      response()->json($activation);
     $user = Auth::user();
    $userId = $user->id;
    $email =$user->email;
    $user = User::find($userId);
    $user->has_paid_package = $package;
//   $payment = new Payments();
                
//                 $payment->invoiceid = $userId;
//                 // $payment->payer_email = $arr['payer']['payer_info']['email'];
//                 $payment->amount = $
//                 // $payment->currency = 'USD';
//                 $payment->status = $arr['state'];

//                 $payment->save();
    $user->has_free_package = 'yes';
    $user->activation = $activation;
    $activations= new activations();
                     
      // $userId = $user->id;
      // $given= $user->activation;
            $activations->code=$activation;
            $activations->package=$package;
            $activations->stutus='not';
                   
                    // Save the changes to the database
                 if($activations->save())
     
    $send = $this->SendCode($email, $activation,$pack);
    response()->json($send);
    
    if ($user->save() ) {
      return redirect()->route('user.dashboard')->with('message', 'You have been  activated '.$pack.' account , Enjoy unlimited earning on Afonete');
    
    } else {
      return redirect()->route('user.package')->with('message', 'error while savig');
    }
    }
  
  public function free(Request $request)
  {
 $activation = $this->generateActivationCode(20);
      response()->json($activation);
    $user = Auth::user();
    $userId = $user->id;
    $email =$user->email;
    $user = User::find($userId);
    $user->has_paid_package = 'standard';
    $package='standard';
    $user->has_free_package = 'yes';
    $user->activation = $activation;
    $send = $this->SendCode($email, $activation,$package);
    response()->json($send);
   

    if ($user->save() ) {
      return redirect()->route('user.dashboard')->with('message', 'You have been  activated standard account , Enjoy free earning on Afonete');
    
    } else {
      return redirect()->route('user.package')->with('message', 'error while savig');
    }
  }

  //activation function
 
private function SendCode($emaili,$activation,$package) {
 
// $subjects = "Activation code of your package";
// $messages = "hello dear. We are happy to have you in system. enter this code $activation to activate your package.This is individual email from Afonete don't share it.";
// $headers = "From: infoafonete@gmail.com\r\n" .
//            "Reply-To: infoafonete@gmail.com\r\n" .
//            "X-Mailer: PHP/" . phpversion();

$email=$emaili;
    $mail = new ActivationEmail($activation,$package);
    Mail::to($email)->send($mail);
  return redirect()->route('user.dashboard');
}

 public function unconfirmed(){
      return view('user.user-package')->with('message',' activation failed,try again');
                    //return view('user.dshboard');
 }
 
 
}
 
 

// $url = 'https://www.blockonomics.co/api/new_address';

// $ch = curl_init();

// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

// $header = "Authorization: Bearer " . $api_key;
// $headers = array();
// $headers[] = $header;
// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// $contents = curl_exec($ch);
// if (curl_errno($ch)) {
//   echo "Error:" . curl_error($ch);
// }

// $responseObj = json_decode($contents);
// $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
// curl_close ($ch);

// if ($status == 200) {
//     echo $responseObj->address;
//  return view('user.dashboard');

  
  
//         // Validate the form input
//         $request->validate([
//             'amount' => 'required|numeric|min:0.01',
//             'package' => 'required'
//         ]);
// $orderID = uniqid();
//       $activation = $this->generateActivationCode(20);
//          response()->json($activation);
//         // Create a new payment invoice
       

//         // Save the payment details in your database
//         $payment = Activations::create([
//             'invoiceid' => $orderID,
            
//             'code' => $activation,
//             'package' =>$request->package,
//             'stutus' => 'pending' // You can set an initial status for the payment
//         ]);

//         $response = Http::post('https://www.blockonomics.co/31T8xOus55ePakEZlzlgqUmZ5w34xcF5lJNPvIKqw7M/new_payment', [
//             'order_id' => $orderID,
//             'value' => $request->amount,
//             'currency' => 'USD', // Change it to your desired currency
//             'address' => 'zpub6qy7oe4xnwoXGd2hU1tx2GM7DgK7cR',
//         ]);
        
        
//         if ($response->successful()) {
//             // Redirect the user to the payment URL
//             return redirect($response->json()['payment_url']);
//         } else {
//             // Handle the error case
//             // You can redirect the user back to the form with an error message
//              return view('user.user-package')->with('error', 'Failed to create payment request. Please try again.');
//             // echo "ERROR: " . $status . ' ' . $responseObj->message;
//         }
      
    
//     }
    
  
 
//   else{
//     return ('not bit coin');
//   }
  