<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => [env('CORS_METHODS', 'POST, GET, OPTIONS, PUT, DELETE')],

    'allowed_origins' => [env('CORS_ORIGIN', '*')],

    'allowed_origins_patterns' => [],

    'allowed_headers' => [env('CORS_HEADERS', '*')],

    'exposed_headers' => [],

    'max_age' => env('CORS_MAX_AGE', 60 * 60 * 24),

    'supports_credentials' => env('CORS_CREDENTIALS', 'false'),

];
