<?php

use Illuminate\Support\Facades\Route;
  use App\Http\Controllers\Controller;
     use App\Providers\RouteServiceProvider;
      use Illuminate\Foundation\Auth\ConfirmsPasswords;
     
   class ConfirmPasswordController extends Controller
     {

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within - group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
	return view('welcome');
});

Auth::routes();
Route::get('/home','Homecontroller@index')->name('home')
->middleware('auth');
