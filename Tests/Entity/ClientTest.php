<?php

namespace SixBySix\Float\Tests\Entity;

use SixBySix\Float\Entity\Client;

class ClientTest extends AbstractEntityTest
{
    public static $updateEntityId;

    public function getClass()
    {
        return Client::class;
    }

    /**
     * @test
     */
    public function create()
    {
        /** @var Client $client */
        $client = new Client();
        $client->setClientName("ACME");
        $client->setClientDesc("Purveyor of Fine Anvils");
        $client->save();

        $this->assertInternalType('int', $client->getId());

        static::$updateEntityId = $client->getId();
    }

    /**
     * @test
     * @depends create
     */
    public function update()
    {
        /** @var Client $client */
        $client = Client::getById(static::$updateEntityId);
        $client->setClientName("ACME Inc.");
        $client->save();

        $this->assertEquals(static::$updateEntityId, $client->getId());
    }

    /**
     * @test
     * @depends update
     */
    public function delete()
    {
        $client = Client::getById(static::$updateEntityId);
        $client->delete();

        $this->expectException("SixBySix\\Float\\Exception\\EntityNotFoundException");
        $client = Client::getById(static::$updateEntityId);
    }
}
