<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderInsertController;
use App\Http\Controllers\OrderViewController;
use App\Http\Controllers\OrderUpdateController;
use App\Http\Controllers\OrderDeleteController;

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
    return redirect()->route('login');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('home');

// Profile Routes
Route::prefix('profile')->name('profile.')->middleware('auth')->group(function(){
    Route::get('/', [UserController::class, 'getProfile'])->name('detail');
    Route::post('/update', [UserController::class, 'updateProfile'])->name('update');
    Route::post('/change-password', [UserController::class, 'changePassword'])->name('change-password');
});

// Roles
Route::resource('roles', App\Http\Controllers\RolesController::class);

// Permissions
Route::resource('permissions', App\Http\Controllers\PermissionsController::class);

// Users 
Route::middleware('auth')->prefix('users')->name('users.')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/create', [AdminController::class, 'create'])->name('create');
    Route::post('/store', [AdminController::class, 'store'])->name('store');
    Route::get('/edit/{user}', [AdminController::class, 'edit'])->name('edit');
    Route::put('/update/{user}', [AdminController::class, 'update'])->name('update');
    Route::delete('/delete/{user}', [AdminController::class, 'delete'])->name('destroy');
    Route::get('/update/status/{user_id}/{status}', [AdminController::class, 'updateStatus'])->name('status');

    
    Route::get('/import-users', [AdminController::class, 'importUsers'])->name('import');
    Route::post('/upload-users', [AdminController::class, 'uploadUsers'])->name('upload');

    Route::get('export/', [AdminController::class, 'export'])->name('export');

});

Route::get('/insert', [orderInsertController::class, 'insertform']);
Route::post('/create', [OrderInsertController::class, 'insert']);
Route::get('/main',[OrderViewController::class,'index']);
Route::get('/edit-records',[OrderUpdateController::class,'index']);
Route::get('/edit/{id}',[OrderUpdateController::class,'show']);
Route::post('/edit/{id}',[OrderUpdateController::class,'edit']);
Route::get('/delete-records',[OrderDeleteController::class,'index']);
Route::get('/delete/{id}',[OrderDeleteController::class,'destroy']);

Route::put('/orders/{id}', [OrderViewController::class, 'complete'])->name('orders.update');
Route::put('/orders/{order}/pending', [OrderViewController::class, 'markPending'])->name('orders.pending');

Route::put('/orders/{id}/paid', [OrderViewController::class, 'markPaid'])->name('orders.paid');
Route::put('/orders/{id}/unpaid',[OrderViewController::class, 'unpaid'])->name('orders.unpaid');

Route::get('/menu',function(){return view("showMenu");})->name("showMenu");
Route::get('/cart',function(){return view("showCart");})->name("showCart");
Route::get('/history',function(){return view("showHistory");})->name("showHistory");
Route::get('/news',function(){return view("showNews");})->name("showNews");



