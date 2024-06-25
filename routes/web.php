<?php

use App\Http\Controllers\Admin\ComicController;
use App\Http\Controllers\ComicController as ControllersComicController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});


Route::get('/comics', [ControllersComicController::class, "index"])->name("comic.index");
// Route::get("/comics/{comic}", [ComicController::class, "show"])->name("comic.show");

Route::resource("comics", ControllersComicController::class);