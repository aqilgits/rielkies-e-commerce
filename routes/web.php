<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Homepage;
use App\Http\Livewire\Login;
use App\Http\Livewire\UserController;
use App\Http\Livewire\Product;
use App\Http\Controllers\easyParcel;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/login', function () {
//     return view('livewire/login');
// });

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});

Route::get('/',[Homepage::class, 'homepage']);

Route::get('/login',[Login::class, 'login']);

Route::post('/login',[UserController::class,'userLogin']);

Route::get('/product',[Product::class, 'index']);
Route::get('detail/{id}',[Product::class, 'detail']);
Route::get('/search',[Product::class, 'search']);
Route::post('/add_to_cart',[Product::class, 'addToCart']);
Route::get('/cartlist',[Product::class, 'cartlist']);

Route::get('/courier',[easyParcel::class,'rateCheck']);
Route::get('/order',[easyParcel::class,'makeOrder']);
Route::get('/payment',[easyParcel::class,'payment']);


