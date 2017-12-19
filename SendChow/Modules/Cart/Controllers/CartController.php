<?php
/**
 * Created by PhpStorm.
 * User: osindex
 * Date: 12/19/17
 * Time: 5:00 PM
 */

namespace SendChow\Modules\Cart\Controllers;


use App\Http\Controllers\Controller;
use SendChow\Modules\Cart\Contract\CartContract;

class CartController extends Controller
{
    private $cartRepo;

    function __construct(CartContract $cartContract)
    {
        $this->middleware('auth');
        $this->cartRepo = $cartContract;
    }

    public function addMenuToCart(int $menuId, int $quantity){
        return $this->cartRepo->add();
    }
}