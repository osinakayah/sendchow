<?php
/**
 * Created by PhpStorm.
 * User: osindex
 * Date: 11/22/17
 * Time: 2:33 AM
 */

namespace SendChow\Modules\Merchant\Repo;


use SendChow\Modules\Merchant\Model\CuisineMock;

class CuisineRepo
{
    protected $_cuisineModel;
    public function __construct(CuisineMock $cuisineMock)
    {
        $this->_cuisineModel = $cuisineMock;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getCuisines(){
        return $this->_cuisineModel->all();
    }

}