<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('admin/index');
});

Route::get('/login', function () {
    return view('auth/signin');
});

Route::post('/login_user',[AuthController::class,'loginUser']);

//Route::get('/createCustomer',[AuthController::class,'createCustomer']);

Route::get('/logout', function () {
   Auth::logout();
   return redirect('login');
});
