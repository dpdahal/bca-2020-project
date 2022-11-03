<?php

if (!function_exists('base_url')) {
    function base_url($uri = '')
    {
        $uri = trim($uri, '/');
        $pathName = basename(__DIR__);
        $requestSchema = $_SERVER['REQUEST_SCHEME'];
        $serverName = $_SERVER['SERVER_NAME'];
        return $requestSchema . '://' . $serverName . '/' . $pathName . '/' . $uri;

    }
}