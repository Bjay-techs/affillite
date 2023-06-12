<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\activation;

use Illuminate\Support\Facades\DB;

class ActivationController extends Controller
{
public function index(){
    return view('user.activation-controller');
} 

public function upgrade(Request $request){
           $code=$request->code;
          $user = Auth::user();
        $userId = $user->id;
        $user=user::find($userId);
           $results = DB::select('SELECT * FROM activations where code= :code',['code'=>$code]);
     if (count($results)>0) {
         foreach ($results as $row) {

            if ($row->stutus=="used") {
     return redirect()->route('user.dashboard.activate')->with('message',' the activation code  has been expired, please try to buy an other');
           
           }
           else{
            
            $user->activation=$code;
            $user->has_paid_package=$row->package;
    
           
           $update=DB::update('UPDATE activations set stutus= :st where code=:cd',['st'=>'used','cd'=>$code]);
            if($user->save() && $update){
            return redirect()->route('user.dashboard')->with('message','your account has been activated.');
            }
        }
    }
       }     else{
     return redirect()->route('user.dashboard.activate')->with('message',' Invalid activateion code, re-enter code again');
             
         }
           }

public function success()
{
    return ('success');
}

public function error()
{
    return ('error');
}
}