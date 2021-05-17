<?php

namespace Tests;

use Piscibus\LaravelApi\LaravelApiServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return string[]
     */
    protected function getPackageProviders($app)
    {
        return[
            LaravelApiServiceProvider::class,
        ];
    }
}
