<?php
/**
 * Created by PhpStorm.
 * User: osindex
 * Date: 12/19/17
 * Time: 5:03 PM
 */
Route::group(['prefix' => 'cart', 'middleware'=>'auth',], function(){
    Route::get('/', '\SendChow\Modules\Cart\Controllers\CartController@index');
    Route::get('addToCart/{menuId}/{quantity}', '\SendChow\Modules\Cart\Controllers\CartController@addMenuToCart');
    Route::get('updateCart/{rowId}/{quantity}', '\SendChow\Modules\Cart\Controllers\CartController@updateCart');
    Route::get('removeItem/{rowId}', '\SendChow\Modules\Cart\Controllers\CartController@destroy');
});
