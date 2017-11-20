<?php
Route::group(['prefix' => 'restaurants'], function(){
    Route::post('get_restaurant_from_city');
});
