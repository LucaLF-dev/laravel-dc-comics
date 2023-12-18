<?php

use App\Models\Comic;
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
    return view('welcome');
})->name('home');

/**
 * CRUD comics
 */

Route::get('/comics', [ComicController::class, 'index'])
    ->name('comics.index');

Route::get('/comics/create', [ComicController::class, 'create'])
    ->name('comics.create');

Route::get('/comics/{comic}', [ComicController::class, 'show'])
    ->name('comics.show');

Route::post('/pastas', [PastaController::class, 'store'])
    ->name('pastas.store');