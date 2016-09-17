<?php

namespace SixBySix\Float\Entity;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

class Skill extends AbstractEntity
{
    /**
     * @var string
     * @Type("string")
     * @Groups({"get", "update", "add"})
     */
    protected $name;

    /**
     * @var int
     * @Type("integer")
     * @Groups({"get", "update", "add"})
     */
    protected $level;
}
