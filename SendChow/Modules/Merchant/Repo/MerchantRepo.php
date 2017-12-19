<?php
/**
 * Created by PhpStorm.
 * User: osindex
 * Date: 10/2/17
 * Time: 9:38 AM
 */

namespace SendChow\Modules\Merchant\Repo;


use SendChow\Modules\Merchant\Contract\MerchantContract;
use SendChow\Modules\Merchant\Model\RestaurantMock;

class MerchantRepo implements MerchantContract
{
    private $restaurantModel;
    public function __construct(RestaurantMock $mock)
    {
        $this->restaurantModel = $mock;
    }

    public function register_new_merchant(array $inputs)
    {
        // TODO: Implement registerNewMerchant() method.
        return $this->restaurantModel->create($inputs);
    }

}