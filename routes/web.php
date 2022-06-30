<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;

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

Route::get('test',[SettingController::class,'index'])->name('setting');

Route::post('gklu',[SettingController::class,'save'])->name('save.setting');

Route::get('list',[SettingController::class,'list'])->name('list.setting');

Route::get('edit/{id}',[SettingController::class,'edit']);

Route::get('delete/{id}',[SettingController::class,'delete']);



