<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class JustTransactionController extends Controller
{
    function index ($id){
          
        $responseTransaction = Http::withHeaders(['Authorization' => session('authorization')])
        ->post('https://sandbox-reporting.rpdpymnt.com/api/v3/transaction', 
               [
                'transactionId' => $id,
               ]);

              
         $transactionData = $responseTransaction->json(); 
          
       $customerData = $transactionData['customerInfo'];
       $fxMerchant = $transactionData['fx']['merchant'];
       $trmerchant = $transactionData['transaction']['merchant'];
        $merchantName = $transactionData['merchant'];
        $total=array_merge($customerData,$trmerchant,$fxMerchant,$merchantName);
         
     return view('justtransaction',$total);
    }
}

