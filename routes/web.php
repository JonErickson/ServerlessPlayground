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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/environment', function () {
	return view('environment');
})->name('environment');

Route::middleware(['auth:sanctum', 'verified'])->get('/events', function () {
	return view('events');
})->name('events');

Route::middleware(['auth:sanctum', 'verified'])->get('/mail', function () {
	return view('mail');
})->name('mail');

Route::get('/debug', function () {
	dump('app config', config('app'));
	dump('livewire config ', config('livewire'));
	unset($_ENV['AWS_ACCESS_KEY_ID'], $_ENV['AWS_SECRET_ACCESS_KEY'], $_ENV['AWS_SESSION_TOKEN']);
	dump('_ENV', collect($_ENV)->sortKeys()->all());
	dump('Livewire Scripts', \Livewire::scripts());
});
