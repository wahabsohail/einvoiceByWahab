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

// Route::get('/viewInvoice', function () {
//     return view('viewInvoice');
// });

Route::get('/viewPayments', function () {
    return view('viewPayments');
});


Route::get('/receivePayments', function () {
    return view('receivePayment');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// userController

Route:: resource('user', 'userController');
Route:: resource('contact', 'contactController');
Route:: resource('invoice', 'invoiceController');
Route:: resource('label', 'labelController');
Route:: resource('payment', 'paymentController');
