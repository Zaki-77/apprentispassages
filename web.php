<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testlaravel', function () {
    return 'testlaravel';
});

Route::get('/page2', function () {
    return view('page2'); // Remplacez par le nom de votre vue
});
Route::get('/page3', function () {
    return view('page3'); // Remplacez par le nom de votre vue
});
Route::resources([
    "Catcdc"=>App\Http\Controllers\CatcdcController::class,
    "Cdc"=>App\Http\Controllers\CdcController::class,
    "Categorie"=>App\Http\Controllers\CategorieController::class,
    "Page"=>App\Http\Controllers\PageController::class,
    "Status"=>App\Http\Controllers\StatusController::class,
    "Prestation"=>App\Http\Controllers\PrestationController::class,
    "Membre"=>App\Http\Controllers\MembreController::class,
    
]);