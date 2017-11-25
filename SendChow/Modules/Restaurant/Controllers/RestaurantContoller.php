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
use SendChow\Modules\Locations\Repo\Place;
use SendChow\Modules\Merchant\Repo\CuisineRepo;
use SendChow\Modules\Merchant\Repo\MerchantCategoriesRepo;
use SendChow\Modules\Restaurant\Repo\RestaurantRepo;

class RestaurantContoller extends Controller
{
    protected $_restaurantRepo;
    protected $_place;
    function __construct(RestaurantRepo $restaurantRepo, Place $place)
    {
        $this->_restaurantRepo  = $restaurantRepo;
        $this->_place           = $place;
    }

    public function listRestaurantFromCity(Request $request, CuisineRepo $cuisineRepo, MerchantCategoriesRepo $merchantCategoriesRepo){
        $region = $request->get('region', 0);

        $restaurants    = $this->_restaurantRepo->getRestaurants((int)$region);
        $cuisines       = $cuisineRepo->getCuisines();
        $categories     = $merchantCategoriesRepo->getCategories();

        return view('modules.restaurant.index', compact('restaurants', 'cuisines', 'categories'));
    }

    public function orderMenu(int $id = 0){
        $cities = $this->getCities();
        $restaurant = $this->_restaurantRepo->getSingleRestaurantDetails($id);
        return view('modules.restaurant.order_menu', compact('cities', 'restaurant'));
    }
    private function getCities(){
        return $this->_place->getCities();
    }

}