<?php

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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\pageController::class, 'home'])->name('admin');
Route::get('/main', [App\Http\Controllers\pageController::class, 'main'])->name('main');
Route::get('/adminmain', [App\Http\Controllers\pageController::class, 'adminmain'])->name('adminmain');
Route::put('/submitmain', [App\Http\Controllers\pageController::class, 'submitmain'])->name('submitmain');
Route::get('/submitcreate', [App\Http\Controllers\AdminController::class, 'servicecreate'])->name('submitcreate');
Route::post('/submitsevice', [App\Http\Controllers\AdminController::class, 'submitsevice'])->name('submitsevice');
Route::get('/servicelist', [App\Http\Controllers\AdminController::class, 'servicelist'])->name('servicelist');
Route::get('/editservice/{id}', [App\Http\Controllers\AdminController::class, 'editservice'])->name('editservice');
Route::put('/updateservice/{id}', [App\Http\Controllers\AdminController::class, 'updateservice'])->name('updateservice');
Route::get('/deleteservice/{id}', [App\Http\Controllers\AdminController::class, 'deleteservice'])->name('deleteservice');

