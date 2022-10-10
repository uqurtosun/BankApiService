<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\LoginAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ClientController;


// Sisteme Girişi ve Çıkış Yolları
Route::get('/', function(){ return view('login');}, 'https')->name('login')->middleware(['LoginControl']);
Route::post('/LoginCheck', [LoginAuth::class, 'index'])->name('LoginCheck');
Route::get('/Logauth', [LoginAuth::class, 'Logauth'])->name('Logauth');

// Admin Bölümünü Ayrı Gruplandırdık. Login Olduktan Sonraki Tüm Yönlendirmeler Burada.

Route::group(['namespace'=>'Admin', 'prefix'=>'Admin'], function(){
       Route::get('/',[TransactionController::class,'index'])->name('admin')->middleware(['LoginAuthControl']);
       Route::match(['post','get'],'/TransactionForm', [TransactionController::class,'transactionForm'])->name('transactionForm')->middleware(['LoginAuthControl']);
       Route::match(['post','get'],'/Client/{id?}',[ClientController::class, 'index'] )->name('client')->middleware(['LoginAuthControl']);
});

