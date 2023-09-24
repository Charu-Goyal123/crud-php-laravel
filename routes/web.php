<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Models\Customer;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class,'register']);
Route::post('/register',[RegistrationController::class,'register'])->name('customer.create');
Route::get('/customer/view',[RegistrationController::class,'view']);
Route::get('/customer/delete{id}',[RegistrationController::class,'delete'])->name('customer.delete');
Route::get('/customer/edit{id}',[RegistrationController::class,'edit'])->name('customer.edit');
Route::post('/customer/update{id}',[RegistrationController::class,'update']);

// Route::get('get-all-session', function(){
//     $session = session()->all();
//       p($session);
// });