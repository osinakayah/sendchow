<?php

namespace SendChow\Modules\Authentication\Contract;

use SendChow\Modules\Merchant\Contract\MerchantContract;

/**
 * Created by PhpStorm.
 * User: osindex
 * Date: 10/1/17
 * Time: 6:50 PM
 */
interface RegisterContract
{
    const MERCHANT  = 1;
    const USER      = 2;
    function register(array $inputs);
    function login(array $credentials);
}