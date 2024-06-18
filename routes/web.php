<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

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

// Rotta per la pagina principale che mostra l'elenco dei fumetti
Route::get('/', [ComicController::class, 'index'])->name('comics.home');

// Rotta per visualizzare il dettaglio di un fumetto
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

// Rotta per visualizzare il form di creazione di un nuovo fumetto
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');

// Rotta per salvare il nuovo fumetto nel database
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');
