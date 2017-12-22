<?php
/**
 * Created by PhpStorm.
 * User: osindex
 * Date: 12/19/17
 * Time: 4:40 PM
 */

namespace SendChow\Modules\Cart\Abstracts;


use SendChow\Modules\Cart\Contract\CartContract;
use SendChow\Modules\Merchant\Model\MenuMock;

abstract class CartAbstract implements CartContract
{
    protected $_menuModel;
    function __construct(MenuMock $menuMock)
    {
        $this->_menuModel = $menuMock;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getMenuItem(int $id){
        return $this->_menuModel->find($id);
    }
}