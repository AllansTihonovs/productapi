<?php

//API routes
Route::get('getProducts', 'allans\productapi\ProductsApiController@getProducts');
Route::get('getProductAttributes', 'allans\productapi\ProductsApiController@getProductAttributes');
Route::get('getProductWithAttributes', 'allans\productapi\ProductsApiController@getProductWithAttributes');

Route::get('getProductsViewEloquent', 'allans\productapi\ProductsApiController@getProductsViewEloquent');
Route::get('getProductsViewSQL', 'allans\productapi\ProductsApiController@getProductsViewSQL');


//Product routes
Route::post('/product', ["uses" => "ProductsController@store"]);
Route::put('/product', ["uses" => "ProductsController@update"]);
Route::delete('/product', ["uses" => "ProductsController@delete"]);