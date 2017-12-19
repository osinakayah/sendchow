<?php

namespace SendChow\Modules\Locations\Controllers;

use App\Http\Controllers\Controller;
use SendChow\Modules\Locations\Repo\Place;

/**
 * Created by PhpStorm.
 * User: osindex
 * Date: 11/18/17
 * Time: 3:04 PM
 */
class LocationController extends Controller
{
    protected $_place;
    function __construct(Place $place)
    {
        $this->_place = $place;
    }

    public function getRegions(int $cityId){
        return response()->json(['data' => $this->_place->getRegions($cityId)]);
    }
}