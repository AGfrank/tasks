<?php

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
    return view('welcome');
});

// Route::get('/', function () {
//     if (Auth::user()) {
//         return redirect('home');
//     }

//     return view('auth.login');
// });

// // Auth::routes();
// Route::namespace('Auth')->group(function () {
//     // Authentication Routes...
//     Route::get('login', 'LoginController@showLoginForm')->name('login');
//     Route::post('login', 'LoginController@login');
//     Route::post('logout', 'LoginController@logout')->name('logout');

//     // Password Reset Routes...
//     Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.reset');
//     Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//     Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset.token');
//     Route::post('password/reset', 'ResetPasswordController@reset');
// });

// // Switch of Languages (Spanish - Portuguese / Portuguese - Spanish)
// Route::get('locale/{locale}/{msg?}', function ($locale, $msg = '') {
//     Session::put('locale', $locale);

//     return redirect()->back()->with('status', $msg);
//     /* This Link will add session of language when they click to change language */
// })->name('locale');

// Route::get('/home', 'DistributorController@index')->name('home');
// Route::get('task/index', 'TaskController@index')->middleware('auth');
