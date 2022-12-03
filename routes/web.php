<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController ;
use App\Http\Controllers\LoginController ;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\PharmacyPerscriptionController;
  
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
  
Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('prescriptions', PrescriptionController::class);
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:Pharmacy'])->group(function () {
  
    Route::get('/Pharmacy/home', [HomeController::class, 'PharmacyHome'])->name('Pharmacy.home');
    Route::resource('pharmacyPerscriptions', PharmacyPerscriptionController::class);
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::get('registration', [RegisterController::class, 'registration'])->name('register');
Route::post('post-registration', [RegisterController::class, 'postRegistration'])->name('register'); 
// Route::resource('prescriptions', PrescriptionController::class);

 