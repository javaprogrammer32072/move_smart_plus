<?php

if (!function_exists('public_url')) {
    function public_url($path = '')
    {
        if(env('APP_ENV')=="local")
            return url($path);
        else
            return url('public/' . ltrim($path, '/'));
    }
}