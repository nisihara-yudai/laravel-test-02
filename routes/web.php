<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test02Controller;

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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/',[Test02Controller::class,'index'])->name('contact.index'); //フォームページ
Route::get('/',[Test02Controller::class,'index']);//
// Route::post('/add',[Test02Controller::class,'create'])->name('contact.index'); //
Route::post('/thanks',[Test02Controller::class,'thanks'])->name('contact.thanks'); //確認ページ