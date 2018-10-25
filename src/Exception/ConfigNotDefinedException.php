<?php namespace Ssatz\ExotelSms\Exception;
/**
 * *
 *  *  * Copyright (C) Optimo Technologies- All Rights Reserved
 *  *  * Unauthorized copying of this file, via any medium is strictly prohibited
 *  *  * Proprietary and confidential
 *  *  * Written by Sathish Kumar(satz) <sathish.thi@gmail.com>
 *  *
 *
 */

use Exception;
use Illuminate\Support\Facades\Log;

class ConfigNotDefinedException extends Exception
{
    /**
     * Report or log an exception.
     *
     * @return void
     */
    public function report()
    {
        Log::debug('Exotel Sms Config not defined');
    }
}