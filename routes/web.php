<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Auth::routes();

require_once (generate_path_to_module_route('Authentication', 'web'));
require_once (generate_path_to_module_route('Home', 'web'));
require_once (generate_path_to_module_route('Locations', 'web'));
require_once (generate_path_to_module_route('Restaurant', 'web'));
