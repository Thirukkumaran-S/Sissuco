<?php

use App\Http\Controllers\ExtensionController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\FacebookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubscriptionController;
use App\Models\Subscription;

use PHPUnit\TextUI\XmlConfiguration\ExtensionCollection;


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
    return view('login');

});

Route::controller(UserController::class)->group(function(){

    Route::get('login','index')->name('login');

    Route::get('registration','registration')->name('registration');

    Route::get('logout','logout')->name('logout');

    Route::post('validate_registration','validate_registration')->name('user.validate_registration');

    Route::post('validate_login', 'validate_login')->name('sample.validate_login');

    Route::get('dashboard','dashboard')->name('dashboard');
});


Route::get('/subscriptionmanager',[SubscriptionController::class,'subscriptiondetails']);
Route::post('subscription-save',[SubscriptionController::class,'subscriptionstore']);

Route::get('change-status/{id}',[SubscriptionController::class,'changeStatus']);
Route::get('subscription-delete/{id}',[SubscriptionController::class,'delete']);


Route::get('/extensionmanager',[ExtensionController::class,'extensiondetails']);
Route::post('extension-save',[ExtensionController::class,'extensionstore']);



Route::get('search',[SubscriptionController::class,'search']);
Route::get('/subscription-view',[SubscriptionController::class,'searchview']);

//Facebook login
Route::prefix('facebook')->name('facebook.')->group( function(){
    Route::get('auth', [FaceBookController::class, 'loginUsingFacebook'])->name('login');
    Route::get('callback', [FaceBookController::class, 'callbackFromFacebook'])->name('callback');
});

// Google URL
Route::prefix('google')->name('google.')->group( function(){
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');
});