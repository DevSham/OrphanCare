<?php


return [
    /*
    |--------------------------------------------------------------------------
    | Valid Campaigns Configuration
    |--------------------------------------------------------------------------
    |
    | Define all valid campaigns and their redirect URLs here.
    | This centralized configuration helps prevent open redirect vulnerabilities.
    |
    */

    'valid_campaigns' => [
        'street-kids-christmas-ride' => 'https://helpkidsup.org',
        'street-kids-christmas' => 'https://helpkidsup.org/support',
    ],

    /*
    |--------------------------------------------------------------------------
    | Allowed Domains for Page URLs
    |--------------------------------------------------------------------------
    |
    | Only these domains are allowed for tracking page URLs.
    |
    */

    'allowed_domains' => [
        'helpkidsup.org',
        'www.helpkidsup.org',
        'localhost', // Remove in production
        '127.0.0.1:8000',
    ],

    /*
    |--------------------------------------------------------------------------
    | Rate Limiting
    |--------------------------------------------------------------------------
    |
    | Configure rate limiting for tracking endpoints.
    |
    */

    'rate_limits' => [
        'button_click' => [
            'max_attempts' => 100,
            'decay_minutes' => 1,
        ],
        'qr_scan' => [
            'max_attempts' => 50,
            'decay_minutes' => 1,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Input Validation Limits
    |--------------------------------------------------------------------------
    |
    | Maximum lengths for various input fields to prevent storage issues.
    |
    */

    'input_limits' => [
        'campaign' => 100,
        'button_id' => 100,
        'button_text' => 255,
        'page_url' => 500,
        'user_agent' => 1000,
        'referer' => 500,
        'ip_address' => 45,
    ],
];
