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
    function update(string $menuIdentifier, array $updates);
    function remove(string $menuIdentifier);
    function getAllItems();
    function getTotal();
    function calculateTax();
    function getSubtotal();
    function count();
    function getMenuItem(int $id);
    function storeCart();
    function restoreCart();
}