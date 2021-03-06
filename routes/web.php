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
// Route::get('/mail','MailController@index');
// Route::get('/mail/list','MailController@show');
Route::resource('mail/unseen','UnseenMessgController');
Route::resource('mail','MailController');
Route::post('/send/mail','SendMailController@index');
Route::post('mail/reply/{inbox}','ReplyController@index');