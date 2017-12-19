<?php
Route::group(['prefix' => 'location'], function (){
    Route::get('get_regions/{cityId}', '\SendChow\Modules\Locations\Controllers\LocationController@getRegions');
});
