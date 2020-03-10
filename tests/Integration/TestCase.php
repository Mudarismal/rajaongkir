<?php

namespace Kavist\RajaOngkir\Tests\Integration;

use Kavist\RajaOngkir\Facades\RajaOngkir;
use Orchestra\Testbench\TestCase as Orchestra;
use Kavist\RajaOngkir\Providers\LaravelServiceProvider as RajaOngkirServiceProvider;

abstract class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app): array
    {
        return [
            RajaOngkirServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app): array
    {
        return [
            'RajaOngkir' => RajaOngkir::class,
        ];
    }
}
