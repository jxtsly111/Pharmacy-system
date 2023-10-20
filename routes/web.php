<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatientController;

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

Route::get('signup',[RegisterController::class,'register'])->name('register');
Route::post('signup', [RegisterController::class, 'registration'])->name('registration');
Route::get('login',[LoginController::class,'login'])->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('patient', [PatientController::class, 'patient'])->name('patient');
Route::post('addPatient', [PatientController::class, 'addPatient'])->name('addPatient');
Route::get('information', [PatientController::class, 'information'])->name('information');
Route::delete('/patients/{patient}', [PatientController::class,'destroy'])->name('patients.destroy');
Route::get('patients/{patient}/edit', [PatientController::class, 'edit'])->name('patients.edit');
Route::patch('/patients/{patient}', [PatientController::class,'update'])->name('patients.update');
Route::get('/patients/{patient}', [PatientController::class, 'display'])->name('patients.display');
Route::get('/search', [PatientController::class, 'search']);
