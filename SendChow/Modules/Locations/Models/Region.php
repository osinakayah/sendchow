<?php

namespace SendChow\Modules\Locations\Models;;

use Illuminate\Database\Eloquent\Model;
use SendChow\Modules\Merchant\Model\RestaurantMock;

class Region extends Model
{
    //
    protected $table = "regions";

    public function restaurants(){
        return $this->hasMany(RestaurantMock::class, 'region_id');
    }
}
