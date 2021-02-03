<?php
use App\Vendor;
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

//home page route
Route::get('/', function () {
    $vendor = Vendor::all();
    return view('landing',compact('vendor'));
});

Auth::routes();


//admin login
Route::get('/admin', function(){
    return view('auth.registerAdmin');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'AdminController@index')->name('admin.home')->middleware('is_admin');

//feedback route
Route::get('view-feedback/', 'AdminController@viewFeedback')->name('feedback.view')->middleware('is_admin');
Route::get('vendor/index', 'VendorController@index')->name('vendor.index')->middleware('is_admin');
Route::get('vendor/create', 'VendorController@create')->name('vendor.create')->middleware('is_admin');
Route::post('vendor/post', 'VendorController@post')->name('vendor.post')->middleware('is_admin');

//category routes
Route::get('vendor/create-category', 'VendorController@createCategory')->name('category.create')->middleware('is_admin');
Route::post('vendor/create-category', 'VendorController@postCategory')->name('category.post')->middleware('is_admin');


//buy product from vendora
//vendors
Route::get('vendors/{id}', 'HomeController@ViewVendors')->name('vendors');
Route::get('payment/{id}', 'HomeController@payForService')->name('payments');

//post payment
//payment.post

Route::post('payment-post/', 'HomeController@PostPayment')->name('payment.post');

Route::get('feedback/', 'AdminController@feedback')->name('feedback');
Route::post('feedback-post/', 'HomeController@PostFeedback')->name('feedback.post');