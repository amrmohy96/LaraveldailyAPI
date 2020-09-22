<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Api')->group(function (){
    Route::get('cats', 'CategoryController@index');
    Route::get('cats/{category}', 'CategoryController@show');

    // products

    Route::get('products', 'ProductController@index');
    Route::get('products/{product}', 'ProductController@show');
});
