<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get("/nokia", function(){
    return view("nokia.nokia");
})->name('nokia');

Route::get('/phone',[PhoneController::class,'PhoneTYpe'])->name('phone');
Route::get('/checkout/{id}',[PhoneController::class,'CheckOut'])->name('checkout');
Route::post('/invoic',[PhoneController::class,'invoic'])->name('invoic');

Route::get('/phonetype',[PhoneController::class,'PhoneType'])->name('phonetype');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

