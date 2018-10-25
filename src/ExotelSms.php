<?php namespace Ssatz\ExotelSms;
/**
 * *
 *  *  * Copyright (C) Optimo Technologies- All Rights Reserved
 *  *  * Unauthorized copying of this file, via any medium is strictly prohibited
 *  *  * Proprietary and confidential
 *  *  * Written by Sathish Kumar(satz) <sathish.thi@gmail.com>
 *  *
 *
 */

use GuzzleHttp\Client;
use Ssatz\ExotelSms\Exception\ConfigNotDefinedException;

/**
 * Class ExotelSms
 * @package Satz\ExotelSms
 */
class ExotelSms
{
    /**
     * @var Client
     */
    protected $client;
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
        return (new static())->request($toMobile, $message);
    }

    /**
     * @return string
     * @throws ConfigNotDefinedException
     */
    private function buildUrl()
    {
        $this->sid = config('exotel-sms.SID');
        $this->token = config('exotel-sms.Token');
        $this->senderId = config('exotel-sms.SenderId');
        if (!isset($this->sid) || !isset($this->token) || !isset($this->senderId)) {
            throw new ConfigNotDefinedException('Exotel Sms Config not defined');
        }
        return 'https://' . $this->sid . ':' . $this->token . '@api.exotel.com/v1/Accounts/' . $this->token . '/Sms/send.json';
    }


    /**
     * @param $mobile
     * @param $message
     * @return \Psr\Http\Message\StreamInterface
     * @throws ConfigNotDefinedException
     */
    private function request($mobile, $message)
    {
        $this->client = new Client();
        return $this->client->post($this->buildUrl(), [
            'form_params' => [
                'From' => $this->senderId,
                'To' => $mobile,
                'Body' => $message,
            ]
        ])->getBody();
    }
}