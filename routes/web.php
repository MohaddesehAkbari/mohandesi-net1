<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\kalacontroller;
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
Route::get('kala', [kalacontroller::class, 'index']);

Route::get('kala',[kalacontroller::class, 'add'] )->name('add');
Route::post('add', [kalacontroller::class, 'create'])->name('addpost');

