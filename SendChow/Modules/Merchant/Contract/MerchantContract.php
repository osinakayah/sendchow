<?php
/**
 * Created by PhpStorm.
 * User: osindex
 * Date: 10/2/17
 * Time: 9:36 AM
 */

namespace SendChow\Modules\Merchant\Contract;


interface MerchantContract
{
    const MERCHANT_PENDING  = 1;
    const MERCHANT_APPROVED = 2;
    public function register_new_merchant(array $inputs);
}