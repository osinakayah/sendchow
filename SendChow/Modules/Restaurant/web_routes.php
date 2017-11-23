<?php
Route::group(['prefix' => 'restaurants'], function(){
    Route::post('get_restaurant_from_city', '\SendChow\Modules\Restaurant\Controllers\RestaurantContoller@listRestaurantFromCity');
    Route::get('order_menu/{restaurantId}', '\SendChow\Modules\Restaurant\Controllers\RestaurantContoller@orderMenu');
});
