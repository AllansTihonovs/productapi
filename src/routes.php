<?php

//API routes
Route::get('getProducts', 'Allans\productApi\ProductsApiController@getProducts');
Route::get('getProductAttributes', 'Allans\productApi\ProductsApiController@getProductAttributes');
Route::get('getProductWithAttributes', 'Allans\productApi\ProductsApiController@getProductWithAttributes');

Route::get('getProductsViewEloquent', 'Allans\productApi\ProductsApiController@getProductsViewEloquent');
Route::get('getProductsViewSQL', 'Allans\productApi\ProductsApiController@getProductsViewSQL');


//Product routes
Route::post('/product', ["uses" => "ProductsController@store"]);
Route::put('/product', ["uses" => "ProductsController@update"]);
Route::delete('/product', ["uses" => "ProductsController@delete"]);