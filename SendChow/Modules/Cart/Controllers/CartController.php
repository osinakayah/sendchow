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

    public function index(){
        $this->cartRepo->restoreCart();
        return response()->json($this->getCartContents());
    }

    /**
     * @return array
     */

    private function getCartContents(){
        $items = $this->cartRepo->getAllItems();

        $subtotal = $this->cartRepo->getSubtotal();
        $tax = $this->cartRepo->calculateTax();
        $total = $this->cartRepo->getTotal();
        $count = $this->cartRepo->count();

        return compact('subtotal', 'tax', 'total', 'count', 'items');
    }

    public function addMenuToCart(int $menuId, int $quantity){
        $this->cartRepo->add($this->cartRepo->getMenuItem($menuId), $quantity);
        $this->cartRepo->storeCart();

        return response()->json($this->getCartContents());

    }

    public function updateCart(string $rowId, $quantity){
        $this->cartRepo->update($rowId, ['qty' => $quantity,]);
        return response()->json($this->getCartContents());
    }
    public function destroy ($rowId){
        $this->cartRepo->remove($rowId);
        return response()->json($this->getCartContents());
    }
}