<?php
/**
 * Created by PhpStorm.
 * User: osindex
 * Date: 11/18/17
 * Time: 2:23 PM
 */

namespace SendChow\Modules\Home\Web\Controllers;


use App\Http\Controllers\Controller;
use SendChow\Modules\Locations\Repo\Place;

class HomeController extends Controller
{
    protected $_place;
    function __construct(Place $place)
    {
        $this->_place = $place;
    }

    public function index(){
        $cities = $this->getCities();
        return view('home', compact('cities'));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    private function getCities(){
        return $this->_place->getCities();
    }
}