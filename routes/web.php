<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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


Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect']);

                                            route::get('/aboutus', [HomeController::class, 'aboutus']);

                                            route::get('/ourdoctors', [HomeController::class, 'ourdoctors']);

                                            route::get('/contactus', [HomeController::class, 'contactus']);

                                            route::get('/news', [HomeController::class, 'news']);

Route::get('doctor', [AdminController::class, 'doctor']);

Route::post('upload_doctor', [AdminController::class, 'upload_doctor']);

Route::post('appointment', [HomeController::class, 'appointment']);

Route::get('myappointments', [HomeController::class, 'myappointments']);

Route::get('/cancel_appointment/{id}', [HomeController::class, 'cancel_appointment']);

Route::get('showappointments', [AdminController::class, 'showappointments']);

Route::get('/approveappointment/{id}', [AdminController::class, 'approveappointment']);

Route::get('/unapproveappointment/{id}', [AdminController::class, 'unapproveappointment']);

Route::get('view_doctors', [AdminController::class, 'view_doctors']);

Route::get('/editdoctor/{id}', [AdminController::class, 'editdoctor']);

Route::get('/deletedoctor/{id}', [AdminController::class, 'deletedoctor']);

Route::post('/updatedoctor/{id}', [AdminController::class, 'updatedoctor']);

Route::get('/emailview/{id}', [AdminController::class, 'emailview']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
