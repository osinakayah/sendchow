<?php
/**
 * Created by PhpStorm.
 * User: osindex
 * Date: 11/25/17
 * Time: 2:59 PM
 */

namespace SendChow\Modules\Merchant\Repo;


use SendChow\Modules\Merchant\Model\CategoriesMock;

class MerchantCategoriesRepo
{

    protected $_categoriesModel;
    public function __construct(CategoriesMock $categoriesMock)
    {
        $this->_categoriesModel = $categoriesMock;
    }

    public function getCategories(){
        return $this->_categoriesModel->all();
    }

}