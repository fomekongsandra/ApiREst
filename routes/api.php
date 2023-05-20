<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
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

// get all contact
Route::get('contacts',[ContactController::class,'getcontact']);

// get  product by id
Route::get('contact/{id}',[ContactController::class,'getContactById']);

 //get add product
Route::post('addcontact',[ContactController::class,'addcontact']);

//get all product
Route::put('updateProduct/{id}',[ContactController::class,'updateProduct']);#

Route::delete('deleteContact/{id}',[ContactController::class,'deleteContact']);#
