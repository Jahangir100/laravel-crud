<?php

use App\Http\Controllers\CrudModelController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[CrudModelController::class,'index'])->name('/home');
Route::post('/insert',[CrudModelController::class,'insert'])->name('/insert');
Route::get('/showdata',[CrudModelController::class,'showdata'])->name('/showdata');
Route::get('/deletedata/{id}',[CrudModelController::class,'deletedata'])->name('/deletedata');
Route::get('/edit/{id}',[CrudModelController::class,'edit'])->name('/edit');
Route::post('/update/{id}',[CrudModelController::class,'update'])->name('/update');
