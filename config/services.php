<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],
    'google' => [
        'client_id' => '156582583679-5tn00t7rn8ckgfsic235q3bg6erb05jm.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],
    'facebook' =>[
        'client_id' => '876593947635136',
        'client_secret' => '8d9ea98fd78513ffe627579039ee7964',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ]
];
