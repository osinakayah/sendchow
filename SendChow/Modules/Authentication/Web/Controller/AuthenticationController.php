<?php

namespace SendChow\Modules\Authentication\Web\Controller;

use App\Http\Controllers\Controller;
use \SendChow\Modules\Authentication\Contract\RegisterContract;
use SendChow\Modules\Authentication\Request\LoginRequest;
use \SendChow\Modules\Authentication\Request\RegistrationRequest;
use Auth;

class AuthenticationController extends Controller
{
    //
    private $registerRepo;
    public function __construct(RegisterContract $registerContract)
    {
        $this->registerRepo = $registerContract;
    }

    public function register(RegistrationRequest $registrationRequest){
        $result = $this->registerRepo->register($registrationRequest->except('_token'));
        if($result){
            $registrationRequest->session()->flash('status', 'Registered Successfully');
            Auth::login($result, true);
            return redirect('/');
        }
        $registrationRequest->session()->flash('status', 'Oops, an error occured');
        return redirect('register');
    }

    public function login(LoginRequest $loginRequest){
        $result = $this->registerRepo->login($loginRequest->except('_token'));
        if($result){
            return redirect()->intended('/');
        }
        return redirect()->back()->withErrors('Email or password was incorrect');
    }

    public function showLoginPage()
    {
        return view('modules.auth.login');
    }

    public function showRegisterPage()
    {
        return view('modules.auth.register');
    }
}
