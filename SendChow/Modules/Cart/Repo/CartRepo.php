<?php
/**
 * Created by PhpStorm.
 * User: osindex
 * Date: 12/19/17
 * Time: 4:41 PM
 */

namespace SendChow\Modules\Cart\Repo;


use Gloudemans\Shoppingcart\Cart;
use Gloudemans\Shoppingcart\Exceptions\CartAlreadyStoredException;
use SendChow\Modules\Cart\Abstracts\CartAbstract;
use SendChow\Modules\Merchant\Model\MenuMock;

class CartRepo extends CartAbstract
{
    private $cart;
    private $tries = 0;

    function __construct(Cart $cart, MenuMock $menuMock)
    {
        parent::__construct($menuMock);
        $this->cart = $cart;
        $this->tries = 0;
    }


    /**
     * @param $menuItem
     * @param int $quantity
     * @return \Gloudemans\Shoppingcart\CartItem
     */
    function add($menuItem, int $quantity = 0)
    {
        // COMPLETED: Implement add() method.
        return $this->cart->instance(\Auth::id())->add($menuItem, $quantity);
    }

    /**
     * @param int $menuIdentifier
     * @param $menuItem
     * @return mixed
     */
    function update(string $menuIdentifier, array $updates)
    {
        // COMPLETED: Implement update() method.
        return $this->cart->instance(\Auth::id())->update($menuIdentifier, $updates);
    }

    /**
     * @param int $menuIdentifier
     */
    function remove(string $menuIdentifier)
    {
        // COMPLETED: Implement remove() method.
        $this->cart->instance(\Auth::id())->remove($menuIdentifier);
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    function getAllItems()
    {
        // COMPLETED: Implement getAllItems() method.
        return $this->cart->instance(\Auth::id())->content();
    }

    function getTotal()
    {
        // COMLETED: Implement getTotal() method.
        return $this->cart->instance(\Auth::id())->total();
    }

    /**
     * @return float
     */
    function calculateTax()
    {
        // COMPLETED: Implement calculateTax() method.
        return $this->cart->instance(\Auth::id())->tax();
    }

    /**
     * @return float
     */
    function getSubtotal()
    {
        // COMPLETED: Implement getSubtotal() method.
        return $this->cart->instance(\Auth::id())->subtotal();
    }

    function count()
    {
        // COMPLETED: Implement count() method.
        return $this->cart->instance(\Auth::id())->count();
    }

    function storeCart()
    {

        $this->tries += 1;
        try{
            $this->cart->instance(\Auth::id())->store(\Auth::id());
        }catch (CartAlreadyStoredException $e){
            if($this->tries < 3){
                \DB::table(config('cart.database.table'))->where('identifier', '=', \Auth::id())->delete();
                $this->storeCart();
            }

        }

        // COMPLETED: Implement storeCart() method.
    }

    function restoreCart()
    {
        // COMPLETED: Implement restoreCart() method.
        $this->cart->instance(\Auth::id())->restore(\Auth::id());
    }

}