<?php

namespace SixBySix\Float\Tests\Entity;

use SixBySix\Float\Entity\Person;

class PersonTest extends AbstractEntityTest
{
    public function getClass()
    {
        return Person::class;
    }

    /**
     * @test
     */
    public function hydrate()
    {
        /** @var string $json */
        $json = file_get_contents(__DIR__ . '/json/person.json');

        /** @var array $data */
        $data = json_decode($json, true);

        /** @var Person $person */
        $person = Person::deserialize($data);

        $this->assertEquals(299, $person->getId());
        $this->assertEquals("Abel Anderson", $person->getName());
        $this->assertEquals("Designer", $person->getJobTitle());
        $this->assertEquals("avatar-299", $person->getAvatarFile());
        $this->assertArra([["name" => "Creative", "id" => 4]], $person->getDepartments());
    }
}
