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

//Route::get('/set-role', function(){
//    auth()->user()->assignRole('superadmin');
//});


Route::get('/', 'AdminController@index')->name('dashboard');

Route::get('/lender', 'AdminController@lender')->name('lender');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout','AdminController@logout')->name('logout');


//borrower
Route::get('/borrower', 'BorrowerController@index')->name('borrower');
Route::post('/borrower/paging', 'BorrowerController@paging')->name('borrower.paguing');
Route::get('/borrower/detail/{id}', 'BorrowerController@detail')->name('borrower.detail');

//loan
Route::get('/loan', 'LoanController@index')->name('loan');
Route::get('/loan/invoice/detail/{id}', 'LoanController@invoice_detail')->name('loan.detail');
Route::get('/loan/verification/data/{id}', 'LoanController@verification_data')->name('loan.verification');



//creditscore
Route::get('/credit/score', 'CreditScoreController@index')->name('loan.credit.score');
Route::post('/credit/score', 'CreditScoreController@credit_score_submit')->name('loan.credit.score.update');


//Master
Route::post('/get/location','MasterController@get_location')->name('location.get');


//Product
Route::get('/product','ProductController@index')->name('product');
Route::get('/product/add','ProductController@add')->name('product.add');
Route::get('/product/edit/{id}','ProductController@edit')->name('product.edit');
Route::post('/product/store','ProductController@store')->name('product.store');
Route::post('/product/paging','ProductController@paging')->name('product.paging');


//setting
Route::get('/setting/users','SettingController@user_admin')->name('setting.user.admin');
Route::post('/setting/list/admin/users','SettingController@user_admin_paging')->name('get.list.admin.users');
Route::get('/setting/users/add','SettingController@add_user_admin')->name('setting.user.admin.add');
Route::post('/setting/users/add','SettingController@store_user_admin')->name('setting.user.admin.add');



//PCG
Route::get('/pcg/','PcgController@index')->name('pcg');
Route::get('/move/','PcgController@move')->name('pcg.move');
Route::get('/pcg/users/data/{id}','PcgController@view_data')->name('pcg.users.data');
Route::post('/pcg/shoortfall/add','PcgController@add')->name('pcg.shoortfall.add');




