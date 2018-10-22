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
    return view('default');
});

Route::get('/about-us', 'AboutusController@index')->name('aboutus');
Route::get('/services', 'ServicesController@index')->name('services');
Route::get('/contact-us', 'ContactusController@index')->name('contactus');

Route::get('/company-registration-form', 'CompanyRegistrationFormController@index')->name('company_registration_form');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
