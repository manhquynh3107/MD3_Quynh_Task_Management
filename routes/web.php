<?php

use App\Http\Controllers\HomeController;
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
    return view('index');
});

Route::prefix('users')->group(function (){
    Route::get('/',[HomeController::class,'index'])->name('users.index');
    Route::get('/create',[HomeController::class,'create'])->name('users.create');
    Route::post('/create',[HomeController::class,'store'])->name('users.store');
    Route::get('/{id}/edit',[HomeController::class,'edit'])->name('users.edit');
});
