<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin-dashboard');
        // return view('well');
    }
        public function login()
    {
        return view('admin.login');
        // return view('well');
    }
         public function contacted()
    {
        return view('admin.contacted');
        // return view('well');
    }
     public function check(Request $request)
    {
         $email = $request->email;
            $password = $request->password;
        $password=sha1($password);
           // $results = DB::select('SELECT * FROM users where `email`= :email' and `password`=:password,['email'=>$email,'password'=>$password]);
           $results = DB::select("SELECT * FROM users where `email`= '$email' and password='$password'");
          
        if (count($results)>0) {
            // Authentication passed, redirect to admin dashboard
          // return ("livewire.admin.admin-dashboard-component");
            return redirect()->route('admin.dashboard');
        }

        //return('Authentication failed, show error message');
     return view('admin.login')->with('message', 'Invalid credentials.');
    }
    }
    // public function project()
    // {
    //     return view('livewire.admin.admin-project-component')->with('message','message');
    //     // return view('well');
    // }

 