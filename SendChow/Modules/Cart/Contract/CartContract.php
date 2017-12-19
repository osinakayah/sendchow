<?php
/**
 * Created by PhpStorm.
 * User: osindex
 * Date: 12/19/17
 * Time: 4:16 PM
 */

namespace SendChow\Modules\Cart\Contract;


use Gloudemans\Shoppingcart\Contracts\Buyable;

interface CartContract
{
    function add($menuItem, int $quantity);
    function update(int $menuIdentifier, $menuItem);
    function remove(int $menuIdentifier);
    function getAllItems();
    function getTotal();
    function calculateTax();
    function getSubtotal();
    function count();
}