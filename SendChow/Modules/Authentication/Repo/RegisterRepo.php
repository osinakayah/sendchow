<?php
namespace SendChow\Modules\Authentication\Repo;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use \SendChow\Modules\Authentication\Contract\RegisterContract;
use \SendChow\Modules\Authentication\Model\UserMock;
use SendChow\Modules\Merchant\Contract\MerchantContract;

/**
 * Created by PhpStorm.
 * User: osindex
 * Date: 10/1/17
 * Time: 6:54 PM
 */
class RegisterRepo implements RegisterContract
{
    private $userModel;
    public function __construct(UserMock $userMock)
    {
        $this->userModel = $userMock;
    }
    /**
     * @param array $inputs
     */

    function register(array $inputs)
    {
        // TODO: Implement register() method.
        $inputs['password'] = bcrypt($inputs['password']);
        $inputs['user_type'] = isset($inputs['user_type'])? $inputs['user_type']: $this::USER;
        $model = $this->userModel->create($inputs);

        return $model;
    }

    function login(array $credentials)
    {
        // TODO: Implement login() method.
        if(Auth::attempt(['email'=>$credentials['email'], 'password' => $credentials['password']])){
            return Auth::user();
        }
        return false;
        //return  Redirect::back()->with('errors', "Incorrect username or password!");
    }

}