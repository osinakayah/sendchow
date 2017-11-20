<?php
/**
 * Created by PhpStorm.
 * User: osindex
 * Date: 11/18/17
 * Time: 2:33 PM
 */

namespace SendChow\Modules\Locations\Repo;


use SendChow\Modules\Locations\Models\City;

class Place
{
    protected $_cityModel;
    function __construct(City $city)
    {
        $this->_cityModel = $city;
    }

    public function getCities(){
        return $this->_cityModel->all();
    }

    public function getRegions(int $cityId){
        $city = $this->_cityModel->find($cityId);
        return $city->regions;
    }
}