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




Route::get('/Protfolliocreate', [App\Http\Controllers\ProtfollioController::class, 'protfolliocreate'])->name('protfolliocreate');
Route::post('/submitProtfollio', [App\Http\Controllers\ProtfollioController::class, 'protfolliosubmit'])->name('submitProtfollio');
Route::get('/Protfolliolist', [App\Http\Controllers\ProtfollioController::class, 'Protfolliolist'])->name('protfolliolist');
Route::get('/editprotfollio/{id}', [App\Http\Controllers\ProtfollioController::class, 'editprotfollio'])->name('editprotfollio');
Route::patch('/updateprotfollio/{id}', [App\Http\Controllers\ProtfollioController::class, 'updateprotfollio'])->name('updateprotfollio');
Route::get('/deletprotfollio/{id}', [App\Http\Controllers\ProtfollioController::class, 'deleteprotfollio'])->name('deleteprotfollio');



Route::get('/aboutcreate', [App\Http\Controllers\AboutController::class, 'aboutcreate'])->name('aboutcreate');
Route::post('/submitabout', [App\Http\Controllers\AboutController::class, 'aboutsubmit'])->name('submitabout');
Route::get('/aboutlist', [App\Http\Controllers\AboutController::class, 'aboutlist'])->name('aboutlist');
Route::get('/editabout/{id}', [App\Http\Controllers\AboutController::class, 'editabout'])->name('editabout');
Route::patch('/updateabout/{id}', [App\Http\Controllers\AboutController::class, 'updateabout'])->name('updateabout');
Route::get('/deleteabout/{id}', [App\Http\Controllers\AboutController::class, 'deleteabout'])->name('deleteabout');



Route::post('/contactstore', [App\Http\Controllers\ContractController::class, 'store'])->name('contact.store');



