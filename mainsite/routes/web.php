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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//livewire
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/brainchild', function () {
    return view('brainchild');
})->name('brainchild');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/dondo', function () {
    return view('dondo');
})->name('dondo');

//team details
Route::get('/eddie', function () {
    return view('eddie');
})->name('eddie');
Route::get('/sandra', function () {
    return view('sandra');
})->name('sandra');
Route::get('/ernest', function () {
    return view('ernest');
})->name('ernest');
Route::get('/francisrick', function () {
    return view('francisrick');
})->name('francisrick');
Route::get('/owusu', function () {
    return view('owusu');
})->name('owusu');
Route::get('/valerie', function () {
    return view('valerie');
})->name('valerie');
Route::get('/isaac', function () {
    return view('isaac');
})->name('isaac');





