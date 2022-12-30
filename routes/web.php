<?php

use App\Http\Controllers\AnimalController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/zoo', [AnimalController::class, 'serve']);
Route::get('/zoo/{animal}', [AnimalController::class, 'show']);


Route::get('/animals', [AnimalController::class, 'index'])->name('animals.index');
Route::get('/animals/create', [AnimalController::class, 'create'])->name('animals.create');
Route::post('/animals/store', [AnimalController::class, 'store'])->name('animals.store');

Route::get('/animals/{animal}/edit', [AnimalController::class, 'showEdit'])->name('animals.edit');
Route::post('/animals/{animal}/edit', [AnimalController::class, 'update'])->name('animals.storeUpdate');
