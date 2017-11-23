<?php
/**
 * Created by PhpStorm.
 * User: osindex
 * Date: 11/20/17
 * Time: 5:03 AM
 */

namespace SendChow\Modules\Restaurant\Repo;


use SendChow\Modules\Locations\Models\Region;
use SendChow\Modules\Merchant\Model\RestaurantMock;

class RestaurantRepo
{
    protected $_restaurantModel, $_regionMock;

    function __construct( RestaurantMock $restaurantMock, Region $region)
    {
        $this->_restaurantModel     = $restaurantMock;
        $this->_regionMock          = $region;
    }

    /**
     * @param int $region
     * @return mixed
     */

    public function getRestaurants(int $region)
    {
        if($region != 0){
            $region = $this->_regionMock->find($region);
            if($region){
                return $region->restaurants()->with(['cuisines'])->simplePaginate(10);
            }
        }else{
            return $this->_restaurantModel->simplePaginate(10);
        }
    }

    public function getSingleRestaurantDetails(int $id){
        $restaurant = $this->_restaurantModel->find($id);

        if($restaurant){
            return $restaurant;
        }
        return null;
    }
}