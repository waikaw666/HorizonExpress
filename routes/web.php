<?php


use App\Http\Controllers\SearchController;
use App\Http\Controllers\SearchResultController;
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


Route::get('/test', function () {
    $term1 = 'Mandalay';
    $term2 = 'Yangon';
    $data1 = \App\Models\Schedule::all();
    $data1->bus->
    dd($data1);
});



Route::get('/search', [SearchController::class, 'index']);
Route::get('/search-result', SearchResultController::class)->name('search-result');


