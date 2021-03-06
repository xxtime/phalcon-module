<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Redis Cache config
    |--------------------------------------------------------------------------
    |
    */
    'host' => env('CACHE_HOST', '127.0.0.1'),

    'port' => env('CACHE_PORT', 6379),

    'dbname' => env("CACHE_NAME", 0),

];
