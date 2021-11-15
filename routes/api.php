<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Livewire\ComponentChecksumManager;
use Livewire\Exceptions\CorruptComponentPayloadException;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('env', function (Request $request) {
	return collect($_ENV)->sortKeys()->all();
});

Route::get('config', function (Request $request) {
	return collect(config()->all())->sortKeys()->all();
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});