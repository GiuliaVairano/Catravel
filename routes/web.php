<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/',[PublicController::class,'home'])->name('home');

Route::get('/1',[PublicController::class, 'chiSiamo'] )->name('seconda');

Route::get('/2', [PublicController::class, 'servizi'])->name('terza');

Route::get('/cats/show/{catId}',[PublicController::class, 'catId'] )->name('cats.show');

// Route::get('/cats/breed/{catBreed},[PublicController::class, 'catBreed'])->name('catBreed');