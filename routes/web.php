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

Auth::routes();


Route::get('/', 'AdminController@index')->name('dashboard');
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


Route::group(['middleware' => ['permission:Permintaan Pinjaman']], function () {

    //loan
    Route::get('/loan', 'LoanController@index')->name('loan');
    Route::get('/loan/invoice/detail/{id}', 'LoanController@invoice_detail')->name('loan.detail');
    Route::get('/loan/verification/data/{id}', 'LoanController@verification_data')->name('loan.verification');
    Route::post('/loan/reject', 'LoanController@reject')->name('loan.reject');
    Route::post('/loan/verification/phone', 'LoanController@verification_phone')->name('loan.verification.phone');
    Route::post('/loan/reject/image', 'LoanController@reject_image')->name('loan.reject.image');
    Route::post('/loan/reject/image', 'LoanController@reject_image')->name('loan.reject.image');
    Route::post('/loan/add/noted/emergency', 'LoanController@add_noted_emergency')->name('loan.add.noted.emergency');
    Route::post('/loan/add/description/crm', 'LoanController@add_description_crm')->name('loan.add.description.crm');
    Route::post('/loan/get/invoice', 'LoanController@get_invoice')->name('loan.get.invoice');
    Route::post('/pcg/set/score','PcgController@set_loan_score')->name('pcg.set.score');


    Route::post('/loan/reason/approve', 'LoanController@reason_approve')->name('loan.reason.approve');
});

Route::group(['middleware' => ['permission:Kredit Score']], function () {
    Route::get('/credit/score', 'CreditScoreController@index')->name('loan.credit.score');
    Route::post('/credit/score', 'CreditScoreController@credit_score_submit')->name('loan.credit.score.update');
});

Route::group(['middleware' => ['permission:Verifikasi Akhir']], function () {
    //verification
    Route::get('/verification/final', 'VerificationController@index')->name('loan.verification.final');
    Route::post('/verification/final/paging', 'VerificationController@paging')->name('loan.verification.paging');
    Route::get('/verification/invoice/detail/{id}', 'VerificationController@invoice_detail')->name('verification.detail');
    Route::post('/verification/confirm', 'VerificationController@confirm')->name('loan.verification.confirm');
});


Route::group(['middleware' => ['permission:pcg']], function () {
    //PCG
    Route::get('/pcg/','PcgController@index')->name('pcg');
    Route::get('/pcg/need/shortfall','PcgController@need_shortfall')->name('pcg');
    Route::get('/pcg/approve','PcgController@approve')->name('approve');
    Route::get('/move/','PcgController@move')->name('pcg.move');
    Route::post('/pcg/shoortfall/add','PcgController@add')->name('pcg.shoortfall.add');
    Route::post('/pcg/reject/loan','PcgController@reject')->name('pcg.reject.loan');
    Route::post('/pcg/confirm/loan','PcgController@confirm')->name('pcg.confirm.loan');
    Route::get('/pcg/users/data/{id}/step-1','PcgController@view_data_step_1')->name('pcg.users.data');
    Route::get('/pcg/users/data/{id}/step-2','PcgController@view_data_step_2')->name('pcg.users.data');
    Route::get('/pcg/users/data/{id}/step-3','PcgController@view_data_step_3')->name('pcg.users.data');
    Route::post('/pcg/get/data','PcgController@paging')->name('pcg.get.data');
    Route::post('/pcg/get/data/shipping','PcgController@paging_shipping')->name('pcg.get.data');
    Route::post('/pcg/approve/shipping/','PcgController@confirm_shipping')->name('approve.shipping');
    Route::post('/pcg/approve/arrive/','PcgController@confirm_arrive')->name('approve.arrive');

});

Route::group(['middleware' => ['permission:Permintaan Pendanaan']], function () {
    //funding
    Route::get('/funding', 'FundingController@index')->name('lender');
    Route::post('/funding/paging', 'FundingController@paging')->name('funding.paging');
    Route::get('/funding/verification/data/{id}', 'FundingController@detail')->name('lender');
    Route::post('/funding/update/status', 'FundingController@update_lender_status')->name('funding.paging');
    Route::post('/funding/reject/status', 'FundingController@reject_lender_status')->name('funding.paging');
});

Route::group(['middleware' => ['permission:Permintaan Pendanaan Individual']], function () {

    Route::get('/funding/individu', 'FundingController@individu')->name('funding.individu');
    Route::post('/funding/paging/individu', 'FundingController@paging_individu')->name('paging.individu');
    Route::get('/funding/individu/verification/data/{id}', 'FundingController@detail_individu')->name('funding.individu.verification');

});

//BILL
Route::group(['middleware' => ['permission:Pengingat Penagihan']], function () {
    Route::get('/collect/reminder', 'BillController@index')->name('collect');
});

Route::group(['middleware' => ['permission:Tagihan Jatuh Tempo']], function () {
    Route::get('/collect/due', 'BillController@due')->name('collect.due');
});

Route::group(['middleware' => ['permission:Tagihan Keterlambatan']], function () {
    Route::get('/collect/due', 'BillController@due')->name('collect.due');
});


Route::group(['middleware' => ['permission:Pengingat Penagihan|Tagihan Jatuh Tempo|Tagihan Keterlambatan']], function () {
    Route::get('/collect/detail/{type}/{invoice_number}/{stages}', 'BillController@detail')->name('collect');
    Route::post('/collect/paging', 'BillController@paging')->name('lender.paging');
    Route::post('/collect/add/crm', 'BillController@collect_add_crm')->name('collect.add.crm');
    Route::get('/collect/late', 'BillController@late')->name('collect.late');

});

Route::group(['middleware' => ['permission:Penagihan Kredit Macet']], function () {
    Route::get('/collect/credit/bad', 'BadCreditController@index')->name('collect.bad.credit');
    Route::post('/collect/credit/bad/paging', 'BadCreditController@paging')->name('collect.bad.credit.paging');
//    Route::post('/collect/credit/bad/detail', 'BadCreditController@detail')->name('collect.bad.credit.detail');
});

Route::group(['middleware' => ['permission:Borrower']], function () {
    //borrower
    Route::get('/borrower', 'BorrowerController@index')->name('borrower');
    Route::post('/borrower/paging', 'BorrowerController@paging')->name('borrower.paging');
    Route::get('/borrower/detail/{id}', 'BorrowerController@detail')->name('borrower.detail');
    Route::post('/borrower/get/user', 'BorrowerController@get_user')->name('borrower.get.user');
    Route::get('/borrower/edit/{id}', 'BorrowerController@edit')->name('borrower.detail');
    Route::post('/borrower/edit', 'BorrowerController@update_profile')->name('borrower.edit.profile');
});

Route::group(['middleware' => ['permission:Lender']], function () {
//lender
    Route::get('/lender', 'LenderController@index')->name('lender');
    Route::get('/lender/detail/{id}', 'LenderController@detail')->name('lender.detail');
    Route::post('/lender/paging', 'LenderController@paging')->name('lender.paging');
    Route::post('/lender/verification/paging', 'LenderController@verification_paging')->name('lender.paging');
    Route::get('/verification/data/lender' , 'LenderController@verification')->name('lender.verification.data');

    Route::get('/verification/lender/{id}' , 'LenderController@verification_lender_data')->name('lender.verification.data');
    Route::post('/lender/update/status', 'LenderController@update_lender_status')->name('Lender.update.status.lender');
});


Route::group(['middleware' => ['permission:Pengguna']], function () {
    //setting
    Route::get('/setting/users','SettingController@user_admin')->name('setting.user.admin');
    Route::post('/setting/list/admin/users','SettingController@user_admin_paging')->name('get.list.admin.users');
    Route::get('/setting/users/add','SettingController@add_user_admin')->name('setting.user.admin.add');
    Route::post('/setting/users/add','SettingController@store_user_admin')->name('setting.user.admin.add');
    Route::get('/setting/users/add/pcg','SettingController@add_pcg')->name('setting.user.admin.add.pcg');
    Route::post('setting/users/add/pcg','SettingController@add_pcg_store')->name('setting.user.admin.add.pcg');
});

Route::group(['middleware' => ['permission:Wewenang']], function () {
    Route::get('/setting/role/','SettingController@role')->name('setting.role');
    Route::post('/setting/role/paging','SettingController@roles_paging')->name('setting.role.paging');
    Route::get('/setting/role/add','SettingController@roles_add')->name('setting.role.add');
    Route::post('/setting/role/add','SettingController@roles_insert')->name('setting.role.add');
});


//Robo
Route::get('/calculate', 'RoboController@index')->name('calculate');
Route::get('/role',function(){
    $user = Auth()->user();

    $permissions = $user->getAllPermissions();

    dd($permissions);
////    $user->givePermissionTo('pcg');
//     $user->revokePermissionTo('pcg');

});
Route::get('/get/jwt', 'MasterController@jwt')->name('jwt');






