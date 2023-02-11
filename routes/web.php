<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantController;

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

/*
Route::get('/', function() { 
    return view('pages.index');
});

Route::get('/form', function () {
    return view('pages.form');
});
*/

Route::get('/', function() { 
    return view('pages.closed');
});

/*Route::get('/form', function () {
    return view('pages.form');
});*/

/* Voyager */
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});