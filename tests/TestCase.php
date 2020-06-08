<?php

namespace OptimoApps\ExotelSms\Test;

/*
 * *
 *  *  * Copyright (C) Optimo Technologies - All Rights Reserved
 *  *  * Unauthorized copying of this file, via any medium is strictly prohibited
 *  *  * Proprietary and confidential
 *  *  * Written by Sathish Kumar(satz) <sathish.thi@gmail.com>
 *  *
 *
 */
use OptimoApps\ExotelSms\ExotelSmsFacade;
use OptimoApps\ExotelSms\ExotelSmsServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

/**
 * Class TestCase.
 */
class TestCase extends OrchestraTestCase
{

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [ExotelSmsServiceProvider::class];
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'ExotelSms' => ExotelSmsFacade::class,
        ];
    }
}
