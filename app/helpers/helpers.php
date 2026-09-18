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

if (!function_exists('service_nav_links')) {
    /**
     * Central list of service pages, used by the footer and the
     * service-detail sidebar so every page links to the same set of routes.
     */
    function service_nav_links()
    {
        return [
            'home-shifting' => [
                'label' => 'Home Shifting',
                'route' => 'services.home-shifting',
            ],
            'office-relocation' => [
                'label' => 'Office Relocation',
                'route' => 'services.office-relocation',
            ],
            'warehouse-storage' => [
                'label' => 'Warehouse Storage',
                'route' => 'services.warehouse-storage',
            ],
            'local-moving' => [
                'label' => 'Local Moving',
                'route' => 'services.local-moving',
            ],
            'car-transportation' => [
                'label' => 'Car Transportation',
                'route' => 'services.car-transportation',
            ],
            'bike-transportation' => [
                'label' => 'Bike Transportation',
                'route' => 'services.bike-transportation',
            ],
        ];
    }
}