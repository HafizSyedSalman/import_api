<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use config;
use Setting;
class MailServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $config = array(
            'driver' => Setting::option('MAIL_MAILER'),
            'host' => Setting::option('MAIL_HOST'),
            'port' => Setting::option('MAIL_PORT'),
            'from' => array(
                'address' => Setting::option('MAIL_FROM_ADDRESS'),
                'name' => Setting::option('MAIL_FROM_NAME'),
            ),
            'encryption' => Setting::option('MAIL_ENCRYPTION'),
            'username' => Setting::option('MAIL_USERNAME'),
            'password' => Setting::option('MAIL_PASSWORD')
        );
        Config::set('mail', $config);
    }
}
