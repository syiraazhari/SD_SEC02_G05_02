<?php

use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Frontend\FrontController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//     return view('layouts.front');
// });

Route::get('/', [FrontController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'isAdmin']], function (){

    Route::get('/dashboard', 'App\Http\Controllers\Admin\FrontendController@index');
    Route::get('services','App\Http\Controllers\Admin\ServiceController@index');
    Route::get('add-services','App\Http\Controllers\Admin\ServiceController@add' );
    Route::post('insert-service','App\Http\Controllers\Admin\ServiceController@insert');
    Route::get('edit-serv/{id}', [ServiceController::class, 'edit']);
    Route::put('update-service/{id}',[ServiceController::class,'update']);
    Route::get('delete-category//{id}',[ServiceController::class,'destroy']);
});

