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

Route::get('/', [ApplicantController::class,'index'])->name('pages.index');

/* Form */
Route::get('form/step-one', [ApplicantController::class,'createStepOne'])->name('pages.step_one');
Route::post('form/step-one', [ApplicantController::class,'postStepOne'])->name('pages.step_one.post');

Route::get('form/step-two', [ApplicantController::class,'createStepTwo'])->name('pages.step_two');
Route::post('form/step-one', [ApplicantController::class,'postStepTwo'])->name('pages.step_two.post');

Route::get('form/step-three', [ApplicantController::class,'createStepThree'])->name('pages.step_three');
Route::post('form/step-three', [ApplicantController::class,'postStepThree'])->name('pages.step_three.post');

Route::get('form/step-four', [ApplicantController::class,'createStepFour'])->name('pages.step_four');
Route::post('form/step-four', [ApplicantController::class,'postStepFour'])->name('pages.step_four.post');

/* Voyager */
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});