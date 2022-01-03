<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\StoreController;
use App\Http\Controllers\Resources\StoreResource;

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

Route::group(['middleware' => ['api', 'cors']], function(){
    Route::options('Store', function() {
        return response()->json();
    });
    Route::resource('Store', 'App\Http\Controllers\StoreController');
});
