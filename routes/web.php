<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('index');
});



// list.blade
Route::get('/list', 'App\Http\Controllers\JobController@show')->name('list');

// detail.blade
Route::get('/detail/{id}', 'App\Http\Controllers\JobController@detail')->name('detail');

// create.blade
Route::get('/create', 'App\Http\Controllers\JobController@create')->name('create');
Route::post('/create', 'App\Http\Controllers\JobController@store')->name('store');

Route::get('/details/{id}/edit', 'App\Http\Controllers\@edit')->name('details.edit');



