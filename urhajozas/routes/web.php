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

Route::get('/api/tasks',[KuldetesController::class,'index']);
Route::get('/api/tasks/{id}', [KuldetesController::class,'show']);
Route::post('/api/tasks', [KuldetesController::class, "store"]);
Route::get('/task/list', [KuldetesController::class,'listView']);
Route::get('/task/new', [KuldetesController::class, "newView"]);
Route::get('/task/edit/{id}', [KuldetesController::class, "editView"]);



