<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\UrlCRUDController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\TestQueueEmails;




 


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
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});
Route::view('/result', 'result')->name('result');
Route::get('/price', [PriceController::class, 'index']);

Route::get('/home', function () {
    return view('home');
});

Route::resource('urls', UrlCRUDController::class);
Route::resource('query', QueryController::class)->only(['index',  'get']);
Route::post('/query/get', 'App\Http\Controllers\QueryController@get')->name('query.get');


Route::get('sending-queue-emails', [TestQueueEmails::class,'sendTestEmails']);


