
# Exotel  Laravel SMS Gateway

[![Latest Version on Packagist](https://img.shields.io/packagist/v/optimoapps/exotel-sml.svg?style=flat-square)](https://packagist.org/packages/optimoapps/razorpay-x)
[![Total Downloads](https://img.shields.io/packagist/dt/optimoapps/exotel-sms.svg?style=flat-square)](https://packagist.org/packages/optimoapps/razorpay-x)
![run-tests](https://github.com/OptimoApps/exotel-sms/workflows/run-tests/badge.svg)
![Check & fix styling](https://github.com/OptimoApps/exotel-sms/workflows/Check%20&%20fix%20styling/badge.svg)

This is a Laravel Package for Exotel SMS Gateway Integration. 
This package supports Laravel 6 or Higher

**Install**
``` bash
composer require optimoapps/exotel-sms
```

Now run `php artisan vendor:publish` to publish config/exotel-sms.php file in your config directory.

**Usage**

``` php
ExotelSms::send(9894000000, 'test');
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email sathish.thi@gmail.com instead of using the issue tracker.

## Credits

- [satz](https://github.com/optimoapps)
- [mani](https://github.com/optimoapps)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.