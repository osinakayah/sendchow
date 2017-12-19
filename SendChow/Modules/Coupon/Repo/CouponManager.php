<?php
/**
 * Created by PhpStorm.
 * User: osindex
 * Date: 10/2/17
 * Time: 2:38 AM
 */

namespace SendChow\Modules\Coupon\Repo;


use Gabievi\Promocodes\Promocodes;
use SendChow\Modules\Authentication\Model\UserMock;
use SendChow\Modules\Coupon\Contract\CouponContract;

class CouponManager implements CouponContract
{
    private $user_model;
    private $promocode;
    public function __construct(UserMock $mock, Promocodes $promocodes)
    {
        $this->user_model   = $mock;
        $this->promocode    = $promocodes;
    }

    function generate_coupon()
    {
        // TODO: Implement generate_coupon() method.
        $reciever = $this->get_receiver(1);

    }

    private function get_receiver($id){
        $user = $this->user_model->find($id);
        if($user){
            return $user;
        }
        return null;
    }
}