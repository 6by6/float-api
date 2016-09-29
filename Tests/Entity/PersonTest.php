<?php

namespace SixBySix\Float\Tests\Entity;

use SixBySix\Float\Entity\Department;
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
        $data = $this->getTestHydrationData('person.json');

        /** @var Person $person */
        $person = Person::deserialize($data);

        $this->assertEquals(299, $person->getId());
        $this->assertEquals("Abel Anderson", $person->getName());
        $this->assertEquals("Designer", $person->getJobTitle());
        $this->assertEquals("avatar-299", $person->getAvatarFile());

        $this->assertEquals(1, sizeof($person->getDepartments()));

        /** @var Department $dept */
        $dept = $person->getDepartments()[0];
        $this->assertInstanceOf(Department::class, $dept);
        $this->assertEquals("Creative", $dept->getName());
        $this->assertEquals(4, $dept->getId());


    }
}
