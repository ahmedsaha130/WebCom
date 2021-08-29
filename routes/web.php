<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
// Route Login
Route::group( [     'prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...

Route::get('/login','Dashboard\AuthController@login')->name('login');
Route::post('/authenticate','Dashboard\AuthController@authenticate')->name('authenticate');
Route::get('logout','Dashboard\AuthController@logout')->name('logout');
Route::get('register','Dashboard\AuthController@register')->name('register');
Route::post('register','Dashboard\AuthController@no_register')->name('no_register');


Route::prefix('/admin')->middleware('auth')->namespace('Dashboard')->group(function () {

    Route::get('/','DashboardController@index')->name('dashboard');
    // Route::get('/myprofile','DashboardController@my_profile')->name('myprofile');
    Route::get('/myaccount_setting','DashboardController@my_account_setting')->name('my_account_setting');
    Route::get('/personal','PersonalController@index')->name('personal');
    Route::post('/update_personal','PersonalController@update_info')->name('update_info');
    Route::post('/change_pass','PersonalController@change_pass')->name('update_pass');
    Route::get('/home-edit','HomeController@index')->name('home-create');
});
});
