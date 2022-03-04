<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClothController;
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
    return view('admin.master');
});

Route::get('/add/cloth',[ClothController::class,'addCloth'])->name('add.cloth');
Route::get('/cloth/list',[ClothController::class,'clothlist'])->name('cloth.list');
Route::post('/cloth/create',[ClothController::class,'clothCreate'])->name('cloth.list.create');
