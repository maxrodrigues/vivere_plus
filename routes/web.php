<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/mailable', function () {
    $attributes['subject'] = 'Sem assunto';
    $attributes['name'] = 'Maxuel Rodrigues';
    $attributes['email'] = 'maxuel.rodrigues@gmail.com';
    $attributes['message'] = 'Descentralizou as uniformidades do discurso da luta anti-colonialista fingindo não entender o contexto sócio-cultural. Deslegitimou a relativação da reparação histórica há tanto tempo necessária com o intuito egoístico que transcendem a normalidade dos fatos.';
    return new App\Mail\ContactSendMail($attributes);
});

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

Route::get('contato', [App\Http\Controllers\AboutUsController::class, "index"])->name('contact-us');
Route::post('contato', [App\Http\Controllers\AboutUsController::class, "sendMail"])->name('contact-us.sendMail');

Route::resource('newsletter', 'App\Http\Controllers\NewsletterController');


// Route::get('/contato', function () {
//     return view('site.contact-us');
// })->name('contact-us');

Route::get('/sustentabilidade', function () {
    return view('site.sustainability');
})->name('sustainability');

Route::get('/parceiros', function () {
    return view('site.pair');
})->name('pair');

/**
 * GALWAN
 * Deixar dinamico
 */
Route::prefix('/parceiros/galwan')->group(function () {
    Route::get('/', function () {
        return view('site.pairs.galwan.index');
    })->name('pair.galwan');

    Route::get('/lancamentos', function () {
        return view('site.pairs.galwan.lancamentos');
    })->name('pair.galwan.lancamentos');

    Route::prefix('/entregues')->group(function () {
        Route::get('/', function () {
            return view('site.pairs.galwan.entregues');
        })->name('pair.galwan.entregues');

        Route::get('/mar-dourado', function () {
            return view('site.pairs.galwan.entregues.mar-dourado');
        })->name('pair.galwan.entregues.mar-dourado');
    });

    Route::get('/parceiros/galwan/em-obras', function () {
        return view('site.pairs.galwan.em-obras');
    })->name('pair.galwan.em-obras');
});

/**
 * GALWAN
 * Deixar dinamico
 */

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
