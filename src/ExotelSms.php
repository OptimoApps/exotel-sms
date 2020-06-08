<?php

namespace OptimoApps\ExotelSms;

/*
 * *
 *  *  * Copyright (C) Optimo Technologies- All Rights Reserved
 *  *  * Unauthorized copying of this file, via any medium is strictly prohibited
 *  *  * Proprietary and confidential
 *  *  * Written by Sathish Kumar(satz) <sathish.thi@gmail.com>
 *  *
 *
 */

use GuzzleHttp\Client;
use OptimoApps\ExotelSms\Enum\SmsType;
use OptimoApps\ExotelSms\Exception\ExotelException;
use OptimoApps\ExotelSms\Exception\ConfigNotDefinedException;

/**
 * Class ExotelSms.
 */
class ExotelSms
{
    /**
     * @var Client
     */
    protected  $client;
    /**
     * @var
     */
    protected $sid;
    /**
     * @var
     */
    protected $token;
    /**
     * @var
     */
    protected $senderId;

    /**
     * @param int $toMobile
     * @param string $message
     */
    public static function send(int $toMobile, string $message)
    {
        return (new static())->sms($toMobile, $message);
    }

    /**
     * Send  Bulk Dynamic Bulk Sms
     * @link https://developer.exotel.com/api/#send-bulk-dynamic-sms.
     * @param array $messages
     */
    public static function sendBulkDynamicSms(array $messages)
    {
        return (new static())->bulkDynamicSms($messages);
    }

    /**
     * @return string
     * @throws ConfigNotDefinedException
     */
    private function buildUrl(int $smsType):string
    {
        $this->sid = config('exotel-sms.SID');
        $this->token = config('exotel-sms.Token');
        $this->senderId = config('exotel-sms.SenderId');
        if (! isset($this->sid) || ! isset($this->token) || ! isset($this->senderId)) {
            throw new ConfigNotDefinedException('Exotel Sms Config not defined');
        }
        switch ($smsType) {
            case SmsType::SMS:
                return 'https://'.$this->sid.':'.$this->token.'@api.exotel.com/v1/Accounts/'.$this->sid.'/Sms/send.json';
                break;

            case SmsType::BULK_DYNAMIC_SMS:
                return 'https://'.$this->sid.':'.$this->token.'@api.exotel.com/v1/Accounts/'.$this->sid.'/Sms/bulksend.json';
                break;
        }
    }

    /**Send SMS
     * https://developer.exotel.com/api/#send-sms
     * @param $mobile
     * @param $message
     * @return string
     * @throws ConfigNotDefinedException
     * @throws ExotelException
     */
    public function sms($mobile, $message)
    {
        $this->client = new Client();
        $response = $this->client->post($this->buildUrl(SmsType::SMS), [
            'form_params' => [
                'From' => $this->senderId,
                'To' => $mobile,
                'Body' => $message,
            ],
        ]);
        if ($response->getStatusCode() === 200) {
            return $response->getBody()->getContents();
        }
        throw new ExotelException($response->getBody(), $response->getStatusCode());
    }

    /**
     * Send Bulk SMS
     * @link https://developer.exotel.com/api/#send-bulk-dynamic-sms.
     * @param array $messages
     * @throws ConfigNotDefinedException
     * @throws ExotelException
     */
    public function bulkDynamicSms(array $messages)
    {
        $this->client = new Client();
        $response = $this->client->post($this->buildUrl(SmsType::BULK_DYNAMIC_SMS), [
            'form_params' => [
                'From' => $this->senderId,
                'Messages'=> $messages,
            ],
        ]);
        if ($response->getStatusCode() === 200) {
            return $response->getBody()->getContents();
        }

        return new ExotelException($response->getBody(), $response->getStatusCode());
    }
}
