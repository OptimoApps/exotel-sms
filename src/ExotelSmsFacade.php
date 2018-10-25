<?php
/**
 * *
 *  *  * Copyright (C) Optimo Technologies - All Rights Reserved
 *  *  * Unauthorized copying of this file, via any medium is strictly prohibited
 *  *  * Proprietary and confidential
 *  *  * Written by Sathish Kumar(satz) <sathish.thi@gmail.com>
 *  *
 *
 */
namespace Satz\ExotelSms;
use Illuminate\Support\Facades\Facade;

class ExotelSmsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'exotel-sms';
    }
}