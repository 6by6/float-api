<?php

namespace SixBySix\Float\Tests;

use PHPUnit\Framework\TestCase;
use SixBySix\Float\FloatClient;

class FloatClientTest extends TestCase
{
    /**
     * @test
     */
    public function setApiKey()
    {
        FloatClient::setApiKey($_ENV['API_KEY']);

        $float = new FloatClient();
        $this->assertEquals($float->getApiKey(), $_ENV['API_KEY']);
    }
}
