<?php
/**
 *  * *
 *  *  *  * Copyright (C) Optimo Technologies - All Rights Reserved
 *  *  *  * Unauthorized copying of this file, via any medium is strictly prohibited
 *  *  *  * Proprietary and confidential
 *  *  *  * Written by Sathish Kumar(satz) <sathish.thi@gmail.com>.
 */

namespace OptimoApps\ExotelSms\Exception;

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
