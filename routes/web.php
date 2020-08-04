<?php

use Illuminate\Support\Facades\Route;
/*
Route::middleware([])->group(function() {

    Route::prefix('admin')->group(function(){

        Route::namespace('Admin')->group(function() {

            Route::name('admin.')->group(function() {
                Route::get('/home', 'TesteControler@teste')->name('home');

                Route::get('/financeiro', 'TesteControler@teste')->name('financeiro');

                Route::get('/produtos', 'TesteControler@teste')->name('produtos');

                Route::get('/', function() {
                    return redirect()->route('admin.home');
                });
            });

        });

    });

}); 
*/

Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.'
], function () {
    Route::get('/home', 'TesteControler@teste')->name('home');

    Route::get('/financeiro', 'TesteControler@teste')->name('financeiro');

    Route::get('/produtos', 'TesteControler@teste')->name('produtos');

    Route::get('/', function() {
        return redirect()->route('admin.home');
    });
});





Route::get('/login', function () {
    return "Login Admin";
})->name('login');



Route::get('/redirect3', function () {
    return redirect()->route('url.teste');
});

Route::get('/nome', function () {
    return "Fala Bicho Louco";
})->name('url.teste');

Route::view('/', 'welcome');

Route::redirect('redirect1', 'redirect2');

//Route::get('redirect1', function () {
//    return redirect('/potora-do-shimbaga2');
//});

Route::get('redirect2', function () {
    return 'redirect 02';
});

Route::get('/produtos/{ximba?}', function ($prosuto = 0) {
    return "Produtos: {$prosuto}";
});


Route::get('/categorias/{ximba}/posts', function ($ximba) {
    return "Posts de {$ximba} da categoria";
});

Route::get('/categorias/{ximba}', function ($ximba) {
    return "Produtos da categoria {$ximba}";
});

Route::match(['get', 'post'], '/match', function () {
    return "match";
});

Route::any('/any', function () {
    return "Any";
});

/*
Route::post('/post', function () {
    return view('welcome');
});
*/
Route::get('/empresa', function () {
    return view('site.contato');
});

Route::get('/contato', function () {
    return "Olá Mundo!";
});

//Route::get('/', function () {
//    return view('welcome');
//});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
