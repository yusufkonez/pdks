<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\GuestController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
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

Route::GET("test", function (){

});

Route::group(["prefix"=>"admin","middleware"=>["auth","can:isAdmin","verified"]], function (){
    Route::GET("home",[AdminController::class, "home"]) -> name("a-home");
    Route::GET("users",[AdminController::class, "listUsers"]) -> name("a-users");
    Route::GET("parks",[AdminController::class, "listParks"]) -> name("a-parks");
    Route::POST("user-add",[AdminController::class,"addUser"]) -> name("adduser");
    Route::POST("park-add",[AdminController::class,"addPark"]) -> name("addpark");
});

Route::group(["prefix"=>"staff","middleware"=>["auth","can:isStaff","verified"]], function (){
    Route::GET("home",[StaffController::class, "home"]) -> name("s-home");
    Route::GET("parks",[StaffController::class, "listParks"]) -> name("parks");
});

Route::GET("guest/index",[GuestController::class, "index"]);

Route::GET('/', function () {
    return view('auth.login');
});

require __DIR__.'/auth.php';

