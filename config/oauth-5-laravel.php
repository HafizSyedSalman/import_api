<?php

return [

    /*
    |--------------------------------------------------------------------------
    | oAuth Config
    |--------------------------------------------------------------------------
    */

    /**
     * Storage
     */
    'storage' => '\\OAuth\\Common\\Storage\\Session',

    /**
     * Consumers
     */
    'consumers' => [

        'Google' => [
            'client_id'     => '904522022632-65olkpoqudo21h63iltmh0uu7bpmv6rl.apps.googleusercontent.com',
            'client_secret' => 'Xff7BXDLN6VWcZsMqQAanrp_',
            'scope'         => ['userinfo_email', 'userinfo_profile','https://www.google.com/m8/feeds/'],
        ],

    ]

];
