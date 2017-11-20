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

class RestaurantContoller extends Controller
{
    public function listRestaurantFromCity(Request $request){
        $region = $request->get('region', 0);

    }

}