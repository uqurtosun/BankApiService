<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ClientController extends Controller
{
    function index ($id){
          
        $responseClient = Http::withHeaders(['Authorization' => session('authorization')])
        ->post('https://sandbox-reporting.rpdpymnt.com/api/v3/client', 
               [
                'transactionId' => $id,
               ]);

              
         $clientData = $responseClient->json(); 


       //  dd($clientData['customerInfo']);      
       return view('client',$clientData['customerInfo'],['countRow'=>count($clientData['customerInfo'])]);
    }
}


