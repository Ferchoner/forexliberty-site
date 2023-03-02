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
Route::get('/licencias', [MainController::class, 'licenses'])->name('licenses');
Route::get('/explicacion', [MainController::class, 'explanation'])->name('explanation');
Route::get('/testimonios', [MainController::class, 'testimony'])->name('testimony');
Route::get('/resultados', [MainController::class, 'results'])->name('results');
Route::get('/bot-trabajando', [MainController::class, 'botWorking'])->name('bot-working');
Route::get('/acerca-de', [MainController::class, 'aboutUs'])->name('about-us');
Route::get('/contacto', [MainController::class, 'contact'])->name('contact');
Route::get('/preguntas-frecuentes', [MainController::class, 'faqs'])->name('faqs');
Route::get('/terminos-condiciones', [MainController::class, 'legal'])->name('legal');

Route::post('/contacto', [MainController::class, 'save'])->name('save-form');
