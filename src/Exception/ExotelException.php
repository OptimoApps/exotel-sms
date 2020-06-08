<?php

namespace OptimoApps\ExotelSms\Exception;

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
