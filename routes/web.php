<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/home' , [App\Http\Controllers\HomeController::class , 'index'])->name('home');

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', function () {
        return view('welcome');
    });
});



Route::get('/users', function () {
    return view('admin.copy');
});


// routes/web.php

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
});
