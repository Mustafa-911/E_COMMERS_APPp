<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect' , 'LocalizationRedirect' , 'LocaleViewPath' ]
    ] , function() {

        Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
                /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
                Route::get('/dashboard', function () {
                    return view('admin.dashboard');
                });
            });
    });






Route::get('/users', function () {
    return view('admin.copy');
});


// routes/web.php

// Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
//     /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
//     Route::get('/dashboard', function () {
//         return view('admin.dashboard');
//     });
// });

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/
