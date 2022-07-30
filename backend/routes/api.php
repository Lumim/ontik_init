<?php

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

Route::group(['middleware' => ['api']], function () {
    Route::get('app/main/getforms',array('as'=>'get all form data','uses'=>'App\Http\Controllers\FormController@getForm'));
    Route::post('app/main/addform/data',array('as'=>'add form data','uses'=>'App\Http\Controllers\FormController@addForm'));
    Route::get('app/main/deleteform/{id}',array('as'=>'delete form data','uses'=>'App\Http\Controllers\FormController@deleteForm'));
    
    
});
