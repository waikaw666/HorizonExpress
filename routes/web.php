<?php


use App\Http\Controllers\SearchController;
use App\Http\Controllers\SearchResultController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/main/contact', function () {
    return view('main.contact');
});

Route::get('/main/about', function () {
    return view('main.about');
});


Route::get('/test', [TestController::class, 'index']);


Route::get('/search', [SearchController::class, 'index']);
Route::get('/search-result', SearchResultController::class);


