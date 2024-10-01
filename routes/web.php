<?php

use App\Http\Middleware\AdminAuth;
use App\Http\Controllers\SearchController;
use \App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DataController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/about',[HomeController::class,'about']);
Route::post('/',[HomeController::class,'search']);
Route::get('/register/{id}/seat',[RegisterController::class,'register_seat']);
Route::get('/register/{id}/info',[RegisterController::class,'register_info']);
Route::get('/search', [SearchController::class, 'index']);
Route::post('/book',[RegisterController::class,'book']);
Route::get('/success',[RegisterController::class,'success']);

Route::get('/admin/login',[LoginController::class,'index']);
Route::post('/admin/sign-in',[LoginController::class,'login']);

Route::middleware(AdminAuth::class)->group(function () {
    Route::get('/admin',[AdminController::class,'index']);

    Route::get('/admin/schedules',[AdminController::class,'schedules']);
    Route::post('admin/schedules',[DataController::class,'create_schedules']);
    Route::put("/admin/schedules/{id}",[DataController::class,'update_schedules']);
    Route::delete("/admin/schedules/{id}",[DataController::class,'delete_schedules']);

    Route::get('/admin/drivers',[AdminController::class,'drivers']);
    Route::post('admin/drivers',[DataController::class,'create_drivers']);
    Route::put("/admin/drivers/{id}",[DataController::class,'update_drivers']);
    Route::delete("/admin/drivers/{id}",[DataController::class,'delete_drivers']);

    Route::get('/admin/buses',[AdminController::class,'buses']);
    Route::post('admin/buses',[DataController::class,'create_buses']);
    Route::put("/admin/buses/{id}",[DataController::class,'update_buses']);
    Route::delete("/admin/buses/{id}",[DataController::class,'delete_buses']);

    Route::get('/admin/bus-routes',[AdminController::class,'bus_routes']);
    Route::post('admin/bus-routes',[DataController::class,'create_bus_routes']);
    Route::put("/admin/bus-routes/{id}",[DataController::class,'update_bus_routes']);
    Route::delete("/admin/bus-routes/{id}",[DataController::class,'delete_bus_routes']);


    Route::get('/admin/origins',[AdminController::class,'origins']);
    Route::post('admin/origins',[DataController::class,'create_origins']);
    Route::put("/admin/origins/{id}",[DataController::class,'update_origins']);
    Route::delete("/admin/origins/{id}",[DataController::class,'delete_origins']);

    Route::get('/admin/destinations',[AdminController::class,'destinations']);
    Route::post('admin/destinations',[DataController::class,'create_destinations']);
    Route::put("/admin/destinations/{id}",[DataController::class,'update_destinations']);
    Route::delete("/admin/destinations/{id}",[DataController::class,'delete_destinations']);

    Route::get('/admin/bookings',[AdminController::class,'bookings']);

    Route::get('/admin/logout',[LoginController::class,'logout']);
});


