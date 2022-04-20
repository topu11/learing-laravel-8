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

Route::get('users/{name?}', function ($name=null) {
    
    return "touhidul islam".$name;
})->where('name','[a-zA-Z]+');

Route::get('products/{id?}', function ($id=null) {
    
    return "the ID IS".' '.$id; 
})->where('id','[0-9]+');

Route::get('orders/{orderid?}', function ($orderid=null) {
    
    return "the ID IS".' '.$orderid; 
});

Route::match(['get', 'post'], '/user/profile', function (Request $request) {
    
    return "the request is".$request->method();
});

Route::any('testany', function (Request $request) {

    return "The request method is ".$request->method();
    
});
