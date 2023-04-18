<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryImageController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\TitleController;
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

Route::get('/',[FrontendController::class ,'index'])->name('index.frontend');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

// Title Route list start
Route::get('/dashboard/title/edit/{id}',[TitleController::class,'edit'])->name('edit.title');
Route::post('/dashboard/title/update/{id}',[TitleController::class,'update'])->name('update.title');

// category Route list start
Route::get('/dashboard/category',[CategoryController::class,'create'])->name('create.category');
Route::post('/dashboard/category/store',[CategoryController::class,'store'])->name('store.category');
Route::get('/dashboard/category/edit/{id}',[CategoryController::class,'edit'])->name('edit.category');
Route::post('/dashboard/category/update/{id}',[CategoryController::class,'update'])->name('update.category');
Route::post('/dashboard/category/destroy/{id}',[CategoryController::class,'destroy'])->name('destroy.category');
// category Route list end

// category image Route list start
Route::get('/dashboard/category/list',[CategoryImageController::class,'index'])->name('index.category.image');
Route::post('/dashboard/category/image/store',[CategoryImageController::class,'store'])->name('store.category.image');
Route::get('/dashboard/category/image/edit/{id}',[CategoryImageController::class,'edit'])->name('edit.category.image');
Route::post('/dashboard/category/image/update/{id}',[CategoryImageController::class,'update'])->name('update.category.image');
Route::post('/dashboard/category/image/destroy/{id}',[CategoryImageController::class,'destroy'])->name('destroy.category.image');
// category image Route list end
});



