<?php

use App\Http\Controllers\KuldetesController;
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

Route::get('/api/Kuldetes',[KuldetesController::class,'index']);
Route::get('/api/Kuldetes/{id}', [KuldetesController::class,'show']);
Route::post('/api/Kuldetes', [KuldetesController::class, "store"]);
Route::get('/Kuldetes/list', [KuldetesController::class,'listView']);
Route::get('/Kuldetes/new', [KuldetesController::class, "newView"]);
Route::get('/Kuldetes/edit/{id}', [KuldetesController::class, "editView"]);



