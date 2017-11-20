<?php
/**
 * Created by PhpStorm.
 * User: osindex
 * Date: 10/1/17
 * Time: 5:48 PM
 */


if(!function_exists('generate_path_to_module_route(')){
    /**
     * @param $module
     * @param $route_type
     * @return string
     */
    function generate_path_to_module_route($module, $route_type){
        $path_to_route    = "/Modules/";
        $route_file     = ($route_type === 'web')? '/web_routes.php': '/api_routes';

        return dirname(__DIR__).$path_to_route.$module.$route_file ;
    }
}