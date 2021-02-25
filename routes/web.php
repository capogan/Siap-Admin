<?php

use Illuminate\Support\Facades\Route;
use jdavidbakr\MailTracker\AdminController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Auth::routes();


Route::get('/', 'AdminController@index');
Route::get('/loan', 'AdminController@loan')->name('loan');
Route::get('/loan/detail/{invoice_number}', 'AdminController@loan_detail')->name('loan.detail');
Route::get('/lender', 'AdminController@lender')->name('lender');
Route::get('/borrower', 'AdminController@borrower')->name('borrower');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout','AdminController@logout')->name('logout');


//Master
Route::post('/get/location','MasterController@get_location')->name('location.get');




//Product
Route::get('/product','ProductController@index')->name('product');
Route::get('/product/add','ProductController@add')->name('product.add');
Route::get('/product/edit/{id}','ProductController@edit')->name('product.edit');
Route::post('/product/store','ProductController@store')->name('product.store');
Route::post('/product/paging','ProductController@paging')->name('product.paging');



