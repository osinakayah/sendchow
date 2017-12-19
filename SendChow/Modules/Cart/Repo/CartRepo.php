<?php
/**
 * Created by PhpStorm.
 * User: osindex
 * Date: 12/19/17
 * Time: 4:41 PM
 */

namespace SendChow\Modules\Cart\Repo;


use Gloudemans\Shoppingcart\Cart;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use SendChow\Modules\Cart\Abstracts\CartAbstract;
use SendChow\Modules\Merchant\Model\MenuMock;

class CartRepo extends CartAbstract
{
    private $cart;

    function __construct(Cart $cart, MenuMock $menuMock)
    {
        parent::__construct($menuMock);
        $this->cart = $cart;
    }


    /**
     * @param $menuItem
     * @param int $quantity
     * @return \Gloudemans\Shoppingcart\CartItem
     */
    function add($menuItem, int $quantity = 0)
    {
        // COMPLETED: Implement add() method.
        return $this->cart->add($menuItem, $quantity);
    }

    /**
     * @param int $menuIdentifier
     * @param $menuItem
     * @return mixed
     */
    function update(int $menuIdentifier, $menuItem)
    {
        // COMPLETED: Implement update() method.
        return $this->update($menuIdentifier, $menuItem);
    }

    /**
     * @param int $menuIdentifier
     */
    function remove(int $menuIdentifier)
    {
        // COMPLETED: Implement remove() method.
        $this->remove($menuIdentifier);
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    function getAllItems()
    {
        // COMPLETED: Implement getAllItems() method.
        return $this->cart->content();
    }

    function getTotal()
    {
        // COMLETED: Implement getTotal() method.
        return $this->cart->total();
    }

    /**
     * @return float
     */
    function calculateTax()
    {
        // COMPLETED: Implement calculateTax() method.
        return $this->cart->tax();
    }

    /**
     * @return float
     */
    function getSubtotal()
    {
        // COMPLETED: Implement getSubtotal() method.
        return $this->cart->subtotal();
    }

    function count()
    {
        // COMPLETED: Implement count() method.
        return $this->cart->count();
    }

}