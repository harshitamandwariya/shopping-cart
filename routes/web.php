<?php

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

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'LoginController@login');

Route::get('/products', 'ProductController@products');

Route::get('/registration', 'userscontroller@users');

Route::get('/purchase', 'userscontroller@purchase');

Route::get('/faq', 'userscontroller@faq');
