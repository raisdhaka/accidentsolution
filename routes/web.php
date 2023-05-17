<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Auth::routes(['register'=>false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('index');
});



Route::get('/home', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/about/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/howitworks', function () {
    return view('howitworks');
})->name('howitworks');

// Route::get('/join', function () {
//     return view('join');
// })->name('join');

Route::get('/join',[HomeController::class,'join'])->name('join');
Route::get('/checkout',[HomeController::class,'checkout'])->name('checkout');
Route::get('/personalinjuryattorney', function () {
    return view('personalinjuryattorney');
})->name('personalinjuryattorney');

Route::get('/search_results', function () {
    return view('directory');
})->name('directory');

Route::get('/workerscomp', function () {
    return view('workerscomp');
})->name('workerscomp');

Route::get('/consumer', function () {
    return view('consumer');
})->name('consumer');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

