<?php

namespace Ssatz\ExotelSms\Test;

/*
 * *
 *  *  * Copyright (C) Optimo Technologies - All Rights Reserved
 *  *  * Unauthorized copying of this file, via any medium is strictly prohibited
 *  *  * Proprietary and confidential
 *  *  * Written by Sathish Kumar(satz) <sathish.thi@gmail.com>
 *  *
 *
 */

use Ssatz\ExotelSms\ExotelSms;
use Illuminate\Support\Facades\Config;
use Ssatz\ExotelSms\Exception\ConfigNotDefinedException;

class ExotelSmsTest extends TestCase
{
    public function testException()
    {
        $this->expectException(ConfigNotDefinedException::class);
        ExotelSms::send(17, 'test');
    }

    public function testJsonResult()
    {
        Config::set('exotel-sms.SID', 'TESt');
        Config::set('exotel-sms.Token', 'TEST');
        Config::set('exotel-sms.SenderId', 'TEST');
        $this->expectExceptionMessage('Unauthorized');
        ExotelSms::send(17, 'test');
    }
}
