<?php


namespace OptimoApps\ExotelSms\Test;

use Illuminate\Config\Repository;
use Illuminate\Foundation\Application;
use OptimoApps\ExotelSms\ExotelSms;
use OptimoApps\ExotelSms\ExotelSmsServiceProvider;

class ServiceProviderTest extends \PHPUnit\Framework\TestCase
{
    public function testBootPublishesConfig()
    {
        $app = new Application();
        $serviceProvider = new ExotelSmsServiceProvider($app);

        $serviceProvider->boot();

        self::assertArrayHasKey(ExotelSmsServiceProvider::class, $serviceProvider::$publishes);
        self::assertIsArray($serviceProvider::$publishes[ExotelSmsServiceProvider::class]);
        self::assertCount(1, $serviceProvider::$publishes[ExotelSmsServiceProvider::class]);
    }

    public function testRegisterMakesRazorXAvailableInApp()
    {
        $app = new Application();
        $app->offsetSet('config', new Repository());
        $serviceProvider = new ExotelSmsServiceProvider($app);

        $serviceProvider->register();

        self::assertTrue($app->has(ExotelSms::class));
        self::assertInstanceOf(ExotelSms::class, $app->make(ExotelSms::class));
    }
}