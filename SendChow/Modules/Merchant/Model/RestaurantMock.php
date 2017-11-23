<?php

namespace SendChow\Modules\Merchant\Model;

use Illuminate\Database\Eloquent\Model;

class RestaurantMock extends Model
{
    //
    protected $table = 'restaurants';

    public function  cuisines(){
        return $this->belongsToMany(CuisineMock::class, 'cuisines_restaurant', 'restaurant_id', 'cuisine_id');
    }
//    public function menus(){
//
//    }
}
