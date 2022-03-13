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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/donations', function (){
    return view('donations.index');
})->name('donations');

Route::get('/patients', function (){
    return view('patients.index');
})->name('patients');
Route::get('/donors', function (){
    return view('donors.index');
})->name('donors');
Route::get('/forms', function (){
    return view('forms.index');
})->name('forms');
Route::get('/settings', function (){
    return view('settings.index');
})->name('settings');
Route::get('/profile', function (){
    return view('profile.index');
})->name('profile');


require __DIR__.'/auth.php';
