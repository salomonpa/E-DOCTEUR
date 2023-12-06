<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SpecialitesController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\DocteursController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\RendezvousController;
use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\WelcomeController;

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

Route::post('/login',[AuthentificationController::class, 'login'] )->name('login');
Route::get('/logout',[AuthentificationController::class, 'logout'] )->name('logout');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');

})->middleware(['auth', 'verified'])->name('dashboard');




// Route::post('/login',[AuthController::class, 'login'] )->name('login');
// Route::get('/logout',[AuthController::class, 'logout'] )->name('logout');

Route::resource('specialites', SpecialitesController:: class);

Route::resource('patients', PatientsController::class);

Route::resource('docteurs', DocteursController:: class);

Route::resource('services', ServicesController:: class);

Route::resource('rendezvouses', RendezvousController:: class);

Route::get('login', [AuthentificationController::class, 'login'])->name('login');

Route::get('dashboard', [AuthentificationController::class, 'dashboard'])->name('dashboard');

Route::get('welcome', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/telecharger-pdf', 'NomDuController@genererPDF');
   

