<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/home', 'HomeController@index');
Route::get('/cart', 'CartController@index');
// Route::get('/cart/{page}', 'CartController@show');
Route::post('/cart/add', 'CartController@add');
Route::get('/checkout', 'CheckoutController@index');
Route::get('/login', 'LoginController@index');
Route::get('/password', 'PasswordController@index');
Route::get('password/{page}', 'PasswordController@show');
Route::get('/plan-lookup-request', 'PlanLookupRequestController@index');
Route::get('/plan-lookup-request-modal', 'PlanLookupRequestController@showModal');
Route::get('/plans', 'PlansController@index');
Route::get('/guarantee', 'PlansController@showGuarantee');
Route::get('/guarantee-modal', 'PlansController@showGuaranteeModal');
Route::get('/help-me-choose', 'PlansController@showHelpMe');
Route::get('/help-me-choose-modal', 'PlansController@showHelpMeModal');
Route::get('/membership-fee', 'PlansController@showMemberShipFee');
Route::get('/membership-fee-modal', 'PlansController@showMemberShipFeeModal');
Route::get('/reviews', 'ReviewsController@index');
Route::get('/support', 'SupportController@index');

