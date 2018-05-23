<?php

namespace Roy688\Ssh\Tests;

use Roy688\Ssh\Facades\Ssh;
use Roy688\Ssh\ServiceProvider;
use Orchestra\Testbench\TestCase;

class SshTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'ssh' => Ssh::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
