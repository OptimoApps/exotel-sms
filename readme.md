[![Build Status](https://travis-ci.org/ssatz/exotel-sms.svg?branch=master)](https://travis-ci.org/ssatz/exotel-sms) [![StyleCI](https://github.styleci.io/repos/154660857/shield?branch=master)](https://github.styleci.io/repos/154660857)

This is a Laravel 5 Package for Exotel SMS Gateway Integration. 
This package supports Laravel 5.5 or Higher

**Install**
`composer require ssatz/exotel-sms`
Now run `php artisan vendor:publish` to publish config/exotel-sms.php file in your config directory.

**Usage**
`ExotelSms::send(9894000000, 'test');`

**Security**
If you discover any security related issues, please email sathish.thi@gmail.com instead of using the issue tracker.

**License**

The MIT License (MIT). Please see License File for more information.
