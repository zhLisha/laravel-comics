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

// Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Comics
Route::get('/comics', function () {

    // Importo array dei comics
    $comicsList = config('comics');

    $data = [
        'comics' => $comicsList
    ];

    return view('comics', $data);
})->name('comics');

// Characters
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

// Movies
Route::get('/movies', function () {
    return view('movies');
})->name('movies');


// Products details
Route::get('/comics/{id}', function($id) {
    
    // Importo array dei comics
    $comicsList = config('comics');

    $singleProduct = [];

   foreach($comicsList as $comic) {

        if ($comic['id'] == $id) {
            $singleProduct[] = $comic;
        }
    };

    if(empty($singleProduct)) {
        abort('404');
    };

    $data = [
        'productDetail' => $singleProduct
    ];

    return view('product_details', $data);

})->name('product_details');