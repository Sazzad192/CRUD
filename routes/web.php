<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

Route :: get('/home', [CrudController::class,'show'])->name('show');
Route :: get('/delete/{id}', [CrudController::class,'destroy'])->name('destroy');
Route :: get('/create', [CrudController::class,'create'])->name('create');
Route :: post('/submit', [CrudController::class,'store'])->name('store');
Route :: get('/edit/{id}', [CrudController::class,'edit'])->name('edit');
Route :: post('/updated/{id}', [CrudController::class,'update'])->name('update');