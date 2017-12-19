<?php

namespace SendChow\Modules\Locations\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    protected $table = 'cities';

    public function regions(){
        return $this->hasMany(Region::class, 'city_id');
    }
}
