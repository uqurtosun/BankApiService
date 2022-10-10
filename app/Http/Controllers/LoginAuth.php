<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginAuth extends Controller
{
     function index (Request $request){
   
    //   $request->validate([
       //    'email'=>'required',
       //   'password'=>'required',
     //  ]);


       
        $responseLogin = Http::asForm()->post('https://sandbox-reporting.rpdpymnt.com/api/v3/merchant/user/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);
        $authorization        = $responseLogin ->json();

        if($authorization['status']=='APPROVED') {session() -> put('authorization', $authorization['token']); echo $responseLogin; }
        elseif(!$request->email ||  !$request->password) {echo '{"code":0,"status":"NOTFOUND","message":"Email or Password Empty"}';}
        else {
            echo $responseLogin;
        }

        
        

     
     
      
     } 


    function Logauth () {

        session()->forget('authorization');
        return redirect('/');

    }

}

/*
            'email' => 'demo@financialhouse.io',
            'password' => 'cjaiU8CV',
*/