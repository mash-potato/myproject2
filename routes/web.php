<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/import_index', 'App\Http\Controllers\YoPrintController@import_index');
    Route::post('index_action', 'App\Http\Controllers\YoPrintController@index_action')->name('index_action');;
    Route::post('yo_upload', 'App\Http\Controllers\YoPrintController@yo_upload')->name('yo_upload');
});