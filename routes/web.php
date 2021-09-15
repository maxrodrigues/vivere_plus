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
// Change Localization
Route::get('lang/{flag}', [App\Http\Controllers\LocalizationController::class, 'setLocale'])->name('setLocale');

    

Route::get('/', [App\Http\Controllers\HomeController::class, "index"])->name('home');

Route::get('/a-vivere', function () {
    return view('site.about');
})->name('about');

Route::get('/empreendimentos', [App\Http\Controllers\BuildingsController::class, 'index'])->name('buildings');
Route::get('/empreendimentos/{slug}', [App\Http\Controllers\BuildingsController::class, 'details'])->name('buildings.details');

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
        Route::resource('attribute', '\App\Http\Controllers\Panel\AttributeController');
        Route::resource('property', '\App\Http\Controllers\Panel\PropertyController');
        Route::resource('testimony', '\App\Http\Controllers\Panel\TestimonyController');
        Route::resource('type-immobile', '\App\Http\Controllers\Panel\TypeImmobileController');
        Route::resource('type-attribute', '\App\Http\Controllers\Panel\TypeAttributeController');
    });
});

