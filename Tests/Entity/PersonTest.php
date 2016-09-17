<?php

namespace SixBySix\Float\Tests\Entity;

use SixBySix\Float\Entity\Person;

class PersonTest extends AbstractEntityTest
{
    public function getClass()
    {
        return Person::class;
    }
}
