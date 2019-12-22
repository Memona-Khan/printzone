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

// Route::get('/', function () {
//     return view('welcome');
 
// });
Route::get('/admin', function () {
    return view('admin');

});
Route::get('/order', function () {
    return view('front_page');

});
//Route::get('/', function () {
//    return view('jobs');
//
//});
Route::get('/Manageradmin', function () {
    return view('auth.login');

});
Route::get('/contact', function () {
    return view('contact');
 
});

Route::get('/ser', function () {
    return view('ser');

});

Route::get('/pana', function () {
    return view('pana');

});

Route::get('/bor', function () {
    return view('bor');

});

Route::get('/wedd', function () {
    return view('wedd');

});

Route::get('/desi', function () {
    return view('desi');

});

Route::get('/offs', function () {
    return view('offs');

});

Route::get('/fitt', function () {
    return view('fitt');

});

Route::get('/up{id}','OrderController@updateView');
Route::get('/viewReview', function () {
    return view('viewReview');

});

Route::get('/read','CvController@read');
Route::get('/vie','OrderController@read');
//Route::get('/admin', function () {
//    return view('admin');
//
//});

Route::post('/ord','OrderController@insert');
Route::get('/sread','ServiceController@read');
Route::get('/reads','FeedbackController@read');

Route::get('/update/{id}','CheckoutController@updateview');

Route::post('/createdata','FeedbackController@insert');
Route::post('/createonce','ServiceController@insert');
Route::post('/insertion','CheckoutController@insert');
Route::get('/showcheck','CheckoutController@read');

Route::get('/applicant', function () {
    return view('applicant');

});
Route::get('/', function () {
    return view('front_page');

});

Route::get('/add_data', function () {
    return view('add_data');

});
Route::get('/jo', function () {
    return view('jobs');
 
});

Route::get('/about', function () {
    return view('about');

});

Route::post('/create','CvController@insert');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
