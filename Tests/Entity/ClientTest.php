<?php

namespace SixBySix\Float\Tests\Entity;

use SixBySix\Float\Entity\Client;

class ClientTest extends AbstractEntityTest
{
    public function getClass()
    {
        return Client::class;
    }

    /**
     * @test
     */
    public function create()
    {
        $client = new Client();
        $client->setClientName("ACME");
        $client->setClientDesc("Purveyor of Fine Anvils");
        $client->save();
    }
}
