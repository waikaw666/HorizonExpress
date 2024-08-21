<?php


use App\Http\Controllers\SearchController;
use App\Http\Controllers\SearchResultController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/about',[HomeController::class,'about']);
Route::post('/',[HomeController::class,'search']);

Route::get('/register/{id}/seat',[RegisterController::class,'register_seat']);
Route::get('/register/{id}/info',[RegisterController::class,'register_info']);

Route::get('/search', [SearchController::class, 'index']);
Route::get('/search-result', SearchResultController::class);

Route::get('/admin',[AdminController::class,'index']);
Route::get('/admin/bookings',[AdminController::class,'bookings']);
Route::post('/book',[RegisterController::class,'book']);

