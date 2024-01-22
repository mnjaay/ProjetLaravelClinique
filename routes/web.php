<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SoinsController;

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
    return view('master');
});


Route::controller(ClientController::class)->group(function(){
    Route::get('/Dashboard' , 'index') ->name('index');
    Route::get('/register' , 'create') ->name('create');
    Route::post('/register' , 'store') ->name('register.store');
    Route::get('/clientupdate/{id}' , 'edit') ->name('client.edit');
    Route::put('/clientupdate/{id}' , 'update') ->name('client.update');
    Route::delete('/client/{id}', 'destroy')->name('client.destroy');
    Route::get('/detailclient/{id}', 'detailClient')->name('client.detailclient');
});

Route::controller(SoinsController::class)->group(function(){

    Route::get('/register_soins' , 'create') ->name('create');
    Route::post('/register_soins' , 'store') ->name('soin.store');

});


