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
    return view('site.index');
})->name('home');

Route::get('/a-vivere', function () {
    return view('site.about');
})->name('about');

Route::get('/empreendimentos', function () {
    return view('site.building');
})->name('buildings');

Route::get('/blog', function () {
    return view('site.blog');
})->name('blog');

Route::get('/contato', function () {
    return view('site.contact-us');
})->name('contact-us');

Route::get('/sustentabilidade', function () {
    return view('site.sustainability');
})->name('sustainability');


Auth::routes();
Route::name('panel.')->prefix('panel')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        // INCLUIR ROTAS DO PAINEL
        Route::resource('type-immobile', '\App\Http\Controllers\Panel\TypeImmobileController');
        Route::resource('type-attribute', '\App\Http\Controllers\Panel\TypeAttributeController');
        Route::resource('attribute', '\App\Http\Controllers\Panel\AttributeController');
        Route::resource('property', '\App\Http\Controllers\Panel\PropertyController');
    });
});

