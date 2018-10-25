<?php namespace Ssatz\ExotelSms\Test;
/**
 * *
 *  *  * Copyright (C) Optimo Technologies - All Rights Reserved
 *  *  * Unauthorized copying of this file, via any medium is strictly prohibited
 *  *  * Proprietary and confidential
 *  *  * Written by Sathish Kumar(satz) <sathish.thi@gmail.com>
 *  *
 *
 */
use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Ssatz\ExotelSms\ExotelSmsFacade;
use Ssatz\ExotelSms\ExotelSmsServiceProvider;


/**
 * Class TestCase
 * @package Satz\ExotelSms\Test
 */
class TestCase extends OrchestraTestCase
{

    /**
     * Setup the test environment.
     */
    public function setUp()
    {
        parent::setUp();

    }
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