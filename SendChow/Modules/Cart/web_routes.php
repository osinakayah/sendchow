<?php
/**
 * Created by PhpStorm.
 * User: osindex
 * Date: 12/19/17
 * Time: 5:03 PM
 */
Route::group(['prefix' => 'cart', 'middleware'=>'auth',], function(){
    Route::get('addToCart/{menuId}/{quantity}', '\SendChow\Modules\Cart\Controllers\CartController@addMenuToCart');
});
