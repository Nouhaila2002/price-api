<?php
use App\Http\Controllers\ApiController; // Add this line
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/execute-function', 'App\Http\Controllers\ApiController@executeFunction')->name('process.form');
Route::post('/price', 'App\Http\Controllers\PriceController@index')->name('price.form');

