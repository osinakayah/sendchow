<?php
/**
 * Created by PhpStorm.
 * User: osindex
 * Date: 10/1/17
 * Time: 5:45 PM
 */

Route::post('register', '\SendChow\Modules\Authentication\Web\Controller\AuthenticationController@register');
Route::post('login', '\SendChow\Modules\Authentication\Web\Controller\AuthenticationController@login');

Route::get('register', '\SendChow\Modules\Authentication\Web\Controller\AuthenticationController@showRegisterPage');
Route::get('login',  '\SendChow\Modules\Authentication\Web\Controller\AuthenticationController@showLoginPage');