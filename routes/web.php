<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\GenerateUrlController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('user.login');
});

Route::name('user.')->middleware('guest','user.auth')->group(function () {
    Route::get('login',[LoginController::class,"showLoginForm"])->name('login');
    Route::post('login/submit',[LoginController::class,"login"])->name('login.submit');
    Route::get('register',[RegisterController::class,"showRegistrationForm"])->name('register');
    Route::post('register/submit',[RegisterController::class,"register"])->name('register.submit');
});

Route::prefix('user')->name('user.')->middleware('auth')->group(function(){

    Route::controller(HomeController::class)->group(function(){
        Route::get('dashboard', 'dashboard')->name('dashboard');
        Route::post('logout', 'logout')->name('logout');
    });
    
    Route::controller(GenerateUrlController::class)->prefix('urls')->name('urls.')->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/delete', 'delete')->name('delete');
    });

});

Route::get('/share/{short_url}', [GenerateUrlController::class, 'shareShortUrl'])->name('share.short.url');