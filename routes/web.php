<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/blog', [App\Http\Controllers\PostController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [App\Http\Controllers\PostController::class, 'detail'])->name('blog.detail');
Route::post('/blog/{id}', [App\Http\Controllers\PostController::class, 'addComment'])->name('blog.comment');

Route::resource('newsletter', 'App\Http\Controllers\NewsletterController');


Route::get('/contato', function () {
    return view('site.contact-us');
})->name('contact-us');

Route::get('/sustentabilidade', function () {
    return view('site.sustainability');
})->name('sustainability');

Route::get('/parceiros', function () {
    return view('site.pair');
})->name('pair');

Route::get('/financiamento', function () {
    return view('site.financing');
})->name('financing');

Route::get('/internacional', function () {
    return view('site.international');
})->name('international');

Route::get('/despachante-e-servicos-cartoriais', function () {
    return view('site.forwarding_agent');
})->name('forwarding_agent');

Route::get('/contratando-uma-corretora-de-imoveis', function () {
    return view('site.broker');
})->name('broker');


Auth::routes();
Route::name('panel.')->prefix('panel')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', [App\Http\Controllers\Panel\HomeController::class, 'index'])->name('home');

        Route::resource('attribute', '\App\Http\Controllers\Panel\AttributeController');
        Route::resource('testimony', '\App\Http\Controllers\Panel\TestimonyController');
        Route::resource('type-immobile', '\App\Http\Controllers\Panel\TypeImmobileController');
        Route::resource('type-attribute', '\App\Http\Controllers\Panel\TypeAttributeController');

        Route::resource('property', '\App\Http\Controllers\Panel\PropertyController');
        Route::resource('property/{property}/property-images', '\App\Http\Controllers\Panel\ImagePropertyController');
        Route::get('property-images/set-main/{property_images}', [App\Http\Controllers\Panel\ImagePropertyController::class, "setMain"])->name('property_image.main');
        Route::get('property-images/set-alt/{property_images}', [App\Http\Controllers\Panel\ImagePropertyController::class, "setAlt"])->name('property_image.alt');

        Route::resource('posts', '\App\Http\Controllers\Panel\PostController');
        Route::resource('categories', '\App\Http\Controllers\Panel\CategoryController');
    });
});

