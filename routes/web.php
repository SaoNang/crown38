<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAthController;
use App\Http\Controllers\ContactManager;
use App\Http\Controllers\Pos;
use App\Http\Controllers\Product;
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
    // return view('welcome');
    return view('Auth.login');
});

Route::get('/login',[CustomAthController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/userpermission',[CustomAthController::class,'userpermission'])->middleware('isLoggedIn');
Route::get('/dashboard',[CustomAthController::class,'dashboard'])->middleware('isLoggedIn');

// Route::post('/createuser',[CustomAthController::class,'createuser'])->name('createuser');
Route::post('/loginuser',[CustomAthController::class,'loginuser'])->name('loginuser');
Route::get('/logout',[CustomAthController::class,'logout']);

Route::get('/userpermission/{id}',[CustomAthController::class,'userpermissiongetid'])->middleware('isLoggedIn');
Route::put('/userpermissionupdate',[CustomAthController::class,'userpermissionupdate'])->name('userpermissionupdate')->middleware('isLoggedIn');
Route::put('/createuser',[CustomAthController::class,'createuser'])->name('createuser')->middleware('isLoggedIn');

Route::get('/manage-contact',[ContactManager::class,'ContactManagerIndex'])->middleware('isLoggedIn');
Route::get('/manage-contact/{id}',[ContactManager::class,'ContactManagerGetId'])->middleware('isLoggedIn');
Route::put('/contact-update',[ContactManager::class,'ContactUpdate'])->name('contact-update')->middleware('isLoggedIn');
Route::put('/create-contact',[ContactManager::class,'CreateContact'])->name('create-contact')->middleware('isLoggedIn');

Route::get('/pos',[Pos::class,'PosIndex']) ->middleware('isLoggedIn');

Route::get('/product',[Product::class,'Index']) ->middleware('isLoggedIn');