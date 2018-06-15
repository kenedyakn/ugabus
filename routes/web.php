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
    //Dashboard
    Route::get('/admin','Admin\DashboardController@index')->name('admin.dashboard');

    //Staff
    Route::get('/admin/staff','Admin\AdminsController@getAllAdmins')->name('admin.staff');
    Route::post('/admin/staff/save','Admin\AdminsController@save')->name('admin.staff.save');
    Route::get('/admin/staff/create','Admin\AdminsController@create')->name('admin.create_new_staff');

    //Users
    Route::get('/admin/users','Admin\UsersController@getAllUsers')->name('admin.users');

    //Buses
    Route::get('/admin/buses/create','Admin\BusesController@createBus')->name('admin.create_new_bus');
    Route::post('/admin/buses/save','Admin\BusesController@save')->name('admin.buses.save');
    Route::get('/admin/buses','Admin\BusesController@getAllBuses')->name('admin.buses');

    //Agents
    Route::get('/admin/agents/create','Admin\AgentsController@createAgent')->name('admin.create_new_agent');
    Route::post('/admin/agents/save','Admin\AgentsController@save')->name('admin.agents.save');
    Route::get('/admin/agents','Admin\AgentsController@getAllAgents')->name('admin.agents');

    //Bookings
    Route::get('/admin/bookings','Admin\BookingsController@getAllBookings')->name('admin.bookings');

    //Routes
    Route::get('/admin/routes','Admin\RoutesController@getAllRoutes')->name('admin.routes');

    //Parks
    Route::get('/admin/parks','Admin\ParksController@getAllParks')->name('admin.parks');


});

//Admin authentication
Route::get('/admin/login', function(){
    return view('admin.login');
})->name('admin.login');

Route::post('/admin/login', 'Admin\AdminLoginController@login');
Route::get('/admin/logout', 'Admin\AdminLoginController@logout');


