<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Ajax\DashboardController as AjaxDashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\TourController;
use App\Http\Controllers\Backend\BillController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\LanguageController;
use App\Http\Controllers\Ajax\LocationController;
use App\Http\Middleware\AuthenticateMiddleware;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\CustomerController;
use App\Http\Controllers\Frontend\BookingController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\HelpController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* FRONTEND ROUTES*/

/* TRANG CHU */
Route::get('/', [HomeController::class, 'index'])->name('home.index');

/* LOCATION */
Route::get('/home/sapa', [HomeController::class, 'sapa'])->name('home.sapa');
Route::get('/home/dalat', [HomeController::class, 'dalat'])->name('home.dalat');
Route::get('/home/vungtau', [HomeController::class, 'vungtau'])->name('home.vungtau');
Route::get('/home/cantho', [HomeController::class, 'cantho'])->name('home.cantho');

/* LOGIN LOGOUT CUSTOMER */
Route::get('/login/index', [CustomerController::class, 'indexLogin'])->name('login.index');
Route::get('/register/index', [CustomerController::class, 'indexRegister'])->name('register.index');
Route::post('/customer/login', [CustomerController::class, 'login'])->name('customer.login');
Route::post('/customer/register', [CustomerController::class, 'register'])->name('customer.register');
Route::get('/logout/index', [CustomerController::class, 'logout'])->name('logout');

/* BOOKING */
Route::get('/home/booking', [BookingController::class, 'index'])->name('home.booking');
Route::get('/home/booking/tour/{id}', [BookingController::class, 'show']);
Route::get('/home/booking/order', [BookingController::class, 'order'])->name('booking.order');

/* SERVICE */
Route::get('/home/service', [ServiceController::class, 'index'])->name('home.service');
Route::get('/home/service/{id}/order', [ServiceController::class, 'order'])->where(['id' => '[0-9]+'])
->name('service.order');

Route::get('/home/blog', [BlogController::class, 'index'])->name('home.blog');

Route::get('/home/help', [HelpController::class, 'index'])->name('home.help');


/* BACKEND ROUTES*/
Route::get('dashboard/index', [DashboardController::class, 'index'])->name
('dashboard.index')->middleware('admin');


/* USER */
Route::group(['prefix' => 'user'], function(){
    Route::get('index', [UserController::class, 'index'])->name
    ('user.index')->middleware('admin');
    Route::get('create', [UserController::class, 'create'])->name
    ('user.create')->middleware('admin');
    Route::post('store', [UserController::class, 'store'])->name
    ('user.store')->middleware('admin');
    Route::get('{id}/edit', [UserController::class, 'edit'])->where(['id' => '[0-9]+'])
    ->name('user.edit')->middleware('admin');
    Route::post('{id}/update', [UserController::class, 'update'])->where(['id' => '[0-9]+'])
    ->name('user.update')->middleware('admin');
    Route::get('{id}/delete', [UserController::class, 'delete'])->where(['id' => '[0-9]+'])
    ->name('user.delete')->middleware('admin');
    Route::delete('{id}/destroy', [UserController::class, 'destroy'])->where(['id' => '[0-9]+'])
    ->name('user.destroy')->middleware('admin');
    
});

/* TOUR */
Route::group(['prefix' => 'tour'], function(){
    Route::get('index', [TourController::class, 'index'])->name
    ('tour.index')->middleware('admin');
    Route::get('create', [TourController::class, 'create'])->name
    ('tour.create')->middleware('admin');
    Route::post('store', [TourController::class, 'store'])->name
    ('tour.store')->middleware('admin');
    Route::get('{id}/edit', [TourController::class, 'edit'])->where(['id' => '[0-9]+'])
    ->name('tour.edit')->middleware('admin');
    Route::post('{id}/update', [TourController::class, 'update'])->where(['id' => '[0-9]+'])
    ->name('tour.update')->middleware('admin');
    Route::get('{id}/delete', [TourController::class, 'delete'])->where(['id' => '[0-9]+'])
    ->name('tour.delete')->middleware('admin');
    Route::delete('{id}/destroy', [TourController::class, 'destroy'])->where(['id' => '[0-9]+'])
    ->name('tour.destroy')->middleware('admin');
});


/* ORDER */
Route::group(['prefix' => 'order'], function(){
    Route::get('index', [OrderController::class, 'index'])
    ->name('order.index')->middleware('admin');
    Route::post('tour/{tour_id}/customer/{customer_id}', [OrderController::class, 'store'])
    ->name('customer.order'); //frontend
    Route::post('/customer/booking', [OrderController::class, 'booking'])
    ->name('customer.booking'); //frontend
    Route::get('{id}/accept', [OrderController::class, 'accept'])->where(['id' => '[0-9]+'])
    ->name('order.accept')->middleware('admin');
    Route::get('{id}/delete', [OrderController::class, 'delete'])->where(['id' => '[0-9]+'])
    ->name('order.delete')->middleware('admin');
    Route::delete('{id}/destroy', [OrderController::class, 'destroy'])->where(['id' => '[0-9]+'])
    ->name('order.destroy')->middleware('admin');
});

/* BILL */
Route::group(['prefix' => 'bill'], function(){
    Route::get('index', [BillController::class, 'index'])->name
    ('bill.index')->middleware('admin');
});





/* LANGUAGE */
Route::group(['prefix' => 'language'], function(){
    Route::get('index', [LanguageController::class, 'index'])->name
    ('language.index')->middleware('admin');
    Route::get('create', [LanguageController::class, 'create'])->name
    ('language.create')->middleware('admin');
    Route::post('store', [LanguageController::class, 'store'])->name
    ('language.store')->middleware('admin');
    Route::get('{id}/edit', [LanguageController::class, 'edit'])->where(['id' => '[0-9]+'])
    ->name('language.edit')->middleware('admin');
    Route::post('{id}/update', [LanguageController::class, 'update'])->where(['id' => '[0-9]+'])
    ->name('language.update')->middleware('admin');
    Route::get('{id}/delete', [LanguageController::class, 'delete'])->where(['id' => '[0-9]+'])
    ->name('language.delete')->middleware('admin');
    Route::delete('{id}/destroy', [LanguageController::class, 'destroy'])->where(['id' => '[0-9]+'])
    ->name('language.destroy')->middleware('admin');
    
});


/* AJAX */
Route::get('ajax/location/getLocation', [LocationController::class, 'getLocation'])->name
('ajax.location.index')->middleware('admin');
Route::post('ajax/dashboard/changeStatus', [AjaxDashboardController::class, 'changeStatus'])->name
('ajax.dashboard.changeStatus')->middleware('admin');
Route::post('ajax/dashboard/changeStatusAll', [AjaxDashboardController::class, 'changeStatusAll'])->name
('ajax.dashboard.changeStatusAll')->middleware('admin');


Route::get('admin', [AuthController::class, 'index'])->name('auth.admin')
->middleware('login');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
