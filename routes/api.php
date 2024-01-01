<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DrugController;
use App\Http\Controllers\PurchaseHistoryController;
<<<<<<< HEAD
use App\Models\Customer;
=======
>>>>>>> 625c3835af76ed8cf1a1ca0b652452689a6c6a9d
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

Route::resource('customers', CustomerController::class);
Route::resource('drugs', DrugController::class);
<<<<<<< HEAD
Route::resource('purchasehistories', PurchaseHistoryController::class);
=======
Route::resource('purchasehistories', PurchaseHistoryController::class);



Route::get('/purchasehistories/{id}', 'PurchaseHistoryController@show');
>>>>>>> 625c3835af76ed8cf1a1ca0b652452689a6c6a9d
