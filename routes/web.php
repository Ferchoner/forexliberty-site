<?php

use App\Http\Controllers\MainController;
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

Route::get('/ssghb/cc', [MainController::class, 'clearCache'])->name('no-name');

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/servicios', [MainController::class, 'services'])->name('services');
Route::get('/medico-legal', [MainController::class, 'medical'])->name('medical');
Route::get('/aviso-de-privacidad', [MainController::class, 'privacy'])->name('privacy');
Route::get('/equipo', [MainController::class, 'team'])->name('team');
Route::get('/contacto', [MainController::class, 'contact'])->name('contact');
Route::post('/crear-cita', [MainController::class, 'save'])->name('save-form');
