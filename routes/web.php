<?php

use Illuminate\Support\Facades\Route;

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
    return view('layout.index');
});


Auth::routes();
Route::name('panel.')->prefix('panel')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        // INCLUIR ROTAS DO PAINEL
        Route::resource('type-immobile', '\App\Http\Controllers\Panel\TypeImmobileController');
        Route::resource('type-attribute', '\App\Http\Controllers\Panel\TypeAttributeController');
        Route::resource('attribute', '\App\Http\Controllers\Panel\AttributeController');
    });
});

