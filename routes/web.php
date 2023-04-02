<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
});

Route::get('/home', [UserController::class, 'showHome']);
Route::get('/menu', [UserController::class, 'showMenu']);
Route::get('/activity', [UserController::class, 'showActivity']);
Route::get('/account', [UserController::class, 'showAccount']);
Route::get("datatest", [UserController::class, 'dataest']);
Route::get('/item',[UserController::class,'index']);
///
// Route::get('/detail_form', [UserController::class, 'detail_form']);
// Route::post('/detail_form', [UserController::class, 'addToCart']);

