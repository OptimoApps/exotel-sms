<?php
/**
 * *
 *  *  * Copyright (C) Woosu Automative India Private Limited - All Rights Reserved
 *  *  * Unauthorized copying of this file, via any medium is strictly prohibited
 *  *  * Proprietary and confidential
 *  *  * Written by Sathish Kumar(satz) <sathish.thi@gmail.com>ManiKandan<smanikandanit@gmail.com >
 *  *.
 */

/**
 * Created by PhpStorm.
 * User: satz
 * Date: 15/11/18
 * Time: 10:00 PM.
 */

namespace Ssatz\ExotelSms\Exception;

use Illuminate\Support\Facades\Log;

class ExotelException extends \Exception
{
    /**
     * Report or log an exception.
     *
     * @return void
     */
    public function report()
    {
        Log::debug('Exotel Sms Exception');
    }
}
