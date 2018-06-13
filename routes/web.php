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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('user.index');
});

//User authentication routes
Route::get('/authentication', 'User\AuthenticationController@authentication')->name('user.login.register');
Route::post('/user/authentication', 'User\AuthenticationController@registerUser')->name('user.submit');
Route::get('/verify/{token}', 'User\VerifyController@verify')->name('verify');
Route::post('/login', 'User\LoginController@login')->name('user.login.submit');
Route::get('/logout', 'User\LoginController@logout')->name('user.logout');

//Search routes
Route::get('/search', 'User\SearchController@search')->name('search');

//Booking routes
Route::get('/bus-details', 'User\BusBookingController@busDetails')->name('bus.details');
Route::get('/bus-booking', 'User\BusBookingController@busBooking')->name('bus.booking');


//User routes
Route::group(['middleware' => 'user'], function () {
    Route::get('/user/{name}', 'User\UserProfileController@userAccount')->name('user.account');
});

//Agents routes
Route::group(['middleware' => 'agent'], function () {

});

//Admin routes
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin','Admin\DashboardController@index')->name('admin.dashboard');
    Route::get('/admin/buses','Admin\BusesController@getAllBuses')->name('admin.buses');
    Route::get('/admin/users','Admin\UsersController@getAllUsers')->name('admin.users');
    Route::get('/admin/agents','Admin\AgentsController@getAllAgents')->name('admin.agents');
    Route::get('/admin/buses/create','Admin\BusesController@createBus')->name('admin.create_new_bus');
    Route::get('/admin/agents/create','Admin\AgentsController@createAgent')->name('admin.create_new_agent');
});

//Admin authentication
Route::get('/admin/login', function(){
    return view('admin.login');
})->name('admin.login');

Route::post('/admin/login', 'Admin\AdminLoginController@login');
Route::get('/admin/logout', 'Admin\AdminLoginController@logout');


