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
use \App\Models\Paytm;

Route::get('/dashboard', function (Paytm $paytm) {
    $status = 0;
    if(\Auth::check()) {
        $status = 3;
        $data = Paytm::where('user_id',auth()->user()->id)->first();
        if($data != null) {
            $status = $data->status; //1
        }
        // else {
        //     $status = 2;
        // }
    }
    else{
        $status=2;
    }
    $response = Http::get('https://www.assetplus.in/appserver/v1/user/info/topFunds');
    $topFunds = $response->json();
    return view('dashboard', compact('topFunds','status'));
})->name('dashboard');

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/investment', 'App\Http\Controllers\SchemeController@invest')->middleware('auth')->name('investment');

Route::get('/schemeDetails', 'App\Http\Controllers\SchemeController@show')->name('schemeDetails');

Route::get('/admin/login', 'App\Http\Controllers\AdminController@loginPage')->name('admin-login');
Route::post('/adminLogin', 'App\Http\Controllers\AdminController@login')->name('adminLogin');
Route::get('/admin/dashboard', 'App\Http\Controllers\AdminController@index')->name('adminDashboard');

Route::get('/pingUser', 'App\Http\Controllers\AdminController@pingUser')->name('pingUser');

Route::get('/sip', function () {
    return view('sip');
})->name('sip');

Route::get('/lumpsum', function () {
    return view('lumpsum');
})->name('lumpsum');

Route::get('/fd', function () {
    return view('fd');
})->name('fd');

Route::get('/rd', function () {
    return view('rd');
})->name('rd');

Route::get('/ssy', function () {
    return view('ssy');
})->name('ssy');

// Route::get('/user-profile', function () {
//     return view('user-profile');
// })->name('user-profile');

Route::get('/user-profile','App\Http\Controllers\UserProfileController@index')->name('user-profile');
Route::get('/initiate','App\Http\Controllers\PaytmController@initiate')->name('initiate.payment');
Route::post('/payment','App\Http\Controllers\PaytmController@pay')->name('make.payment');
Route::post('/payment/status', 'App\Http\Controllers\PaytmController@paymentCallback')->name('status');

Route::get('/contact-us','App\Http\Controllers\ContactController@contact')->name('contact-us');

Route::post('/send-message','App\Http\Controllers\ContactController@sendEmail')->name('contact.send');
require __DIR__.'/auth.php';