<?php namespace Satz\ExotelSms;
/**
 * *
 *  *  * Copyright (C) Optimo Technologies - All Rights Reserved
 *  *  * Unauthorized copying of this file, via any medium is strictly prohibited
 *  *  * Proprietary and confidential
 *  *  * Written by Sathish Kumar(satz) <sathish.thi@gmail.com>
 *  *
 *
 */

use Illuminate\Support\ServiceProvider;

/**
 * Class ExotelSmsServiceProvider
 * @package Satz\ExotelSms
 */
class ExotelSmsServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ExotelSms::class, function () {
            return new ExotelSms();
        });

        $this->app->alias(ExotelSms::class, 'exotel-sms');
    }

    /**
     *
     */
    public function boot()
    {
        $configPath = __DIR__ . '/../config/exotel-sms.php';
        $this->publishes([$configPath => config_path('exotel-sms.php')]);
    }


}