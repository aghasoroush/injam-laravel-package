<?php

namespace Aghasoroush\InjamLaravelPackage\Tests;

use Aghasoroush\InjamLaravelPackage\Facades\InjamLaravelPackage;
use Aghasoroush\InjamLaravelPackage\ServiceProvider;
use Orchestra\Testbench\TestCase;

class InjamLaravelPackageTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'injam-laravel-package' => InjamLaravelPackage::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
