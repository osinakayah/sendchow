<?php
/**
 * Created by PhpStorm.
 * User: osindex
 * Date: 11/20/17
 * Time: 4:59 AM
 */

namespace SendChow\Modules\Restaurant\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SendChow\Modules\Restaurant\Repo\RestaurantRepo;

class RestaurantContoller extends Controller
{
    protected $_restaurantRepo;
    function __construct(RestaurantRepo $restaurantRepo)
    {
        $this->_restaurantRepo = $restaurantRepo;
    }

    public function listRestaurantFromCity(Request $request){
        $region = $request->get('region', 0);
        $restaurants = $this->_restaurantRepo->getRestaurants($region);

    }

}