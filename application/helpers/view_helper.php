<?php
use Jenssegers\Blade\Blade;
if (!function_exists('view')) {
    function view($view, $data = []) {
        $path = APPPATH.'views';
        $blade = new Blade($path, $path . '/cache');
        echo $blade->make($view, $data);
    }
}

if (!function_exists('admin')) {
    function admin($view, $data = []) {
        $path = APPPATH.'views/admin/';
        $blade = new Blade($path, APPPATH.'/cache');
        echo $blade->make($view, $data);
    }
}


if (!function_exists('user')) {
    function user($view, $data = []) {
        $path = APPPATH.'views/user/';
        $blade = new Blade($path, APPPATH.'/cache');
        echo $blade->make($view, $data);
    }
}