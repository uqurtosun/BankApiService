<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class TransactionController extends Controller
{
      function index (){
        return view('transaction');
      }


      function transactionForm(Request $request){
      
        
        // Transaction Başlangıç ve Bitiş Tarihi Gelip Gelmediği Konteol Ediliyor
      $request->validate([
          'startDate'=>'required',
          'endDate'=>'required',
      ]);
        $request->flash();
        

         // Transaction Sayfalama için Kontrol Yapılıyor
        if($request->page == 'NEXT') {$curPage=1+$request->curPage;} elseif($request->page == 'PREV' && $request->curPage > 1) {$curPage=$request->curPage-1;} else {$curPage=1;}

         // Transaction Verileri Çekiliyor
        $responseTransactionList = Http::withHeaders(['Authorization' => session('authorization')])
       ->post('https://sandbox-reporting.rpdpymnt.com/api/v3/transaction/list', 
             [
               'fromDate' => ".$request->startDate.",
               'toDate' => ".$request->endDate.",
               'page' =>$curPage,
               'merchantId'=>3,
               'status'=>$request->STATUS,
               
             ]);
         
         // Transaction JSON çevirliyor
         $oneList= $responseTransactionList->json();
    

        
      // Transactions ve Sayfalama Bilgililer View Gönderiliyor
        return view('home',$oneList,['status'=>$request->STATUS,'omo'=>$request->page,'curPage'=>$curPage]);
   
      }
}
