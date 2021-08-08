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

Route::get('/', [AnimalController::class, "index"]);
Route::get('/create-animale', function() { return view("pages.createAnimal");});
Route::post('/animal/create', [AnimalController::class, "store"]);
Route::delete('/animal/{id}/delete', [AnimalController::class, "destroy"]);
Route::get('/animal/{id}', [AnimalController::class, "show"]);
Route::get('/animal/{id}/edit', [AnimalController::class, "edit"]);
Route::put('/animal/{id}/update', [AnimalController::class, "update"]);
