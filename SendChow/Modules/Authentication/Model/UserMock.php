<?php
namespace SendChow\Modules\Authentication\Model;
use Gabievi\Promocodes\Traits\Rewardable;

/**
 * Created by PhpStorm.
 * User: osindex
 * Date: 10/1/17
 * Time: 7:02 PM
 */
class UserMock extends \Illuminate\Foundation\Auth\User
{
    use \Illuminate\Notifications\Notifiable, Rewardable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email', 'password', 'phone_number', 'user_type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'users';

}