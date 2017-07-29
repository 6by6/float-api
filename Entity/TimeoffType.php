<?php

namespace SixBySix\Float\Entity;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

class TimeoffType extends AbstractResourceEntity
{
    /**
     * @var int
     * @Type("integer")
     * @Groups({"update", "post", "get"})
     */
    protected $timeoffTypeId;

    /**
     * @var string
     * @Type("string")
     * @Groups({"get", "update", "add"})
     */
    protected $timeoffTypeName;

    /**
     * @var string
     * @Type("string")
     * @Groups({"get", "update", "add"})
     */
    protected $color;

    /**
     * @var int
     * @Type("integer")
     * @Groups({"update", "post", "get"})
     */
    protected $createdBy;

    /**
     * @return int
     */
    public function getTimeoffTypeId()
    {
        return $this->timeoffTypeId;
    }

    /**
     * @param int $timeoffTypeId
     * @return TimeoffType
     */
    public function setTimeoffTypeId($timeoffTypeId)
    {
        $this->timeoffTypeId = $timeoffTypeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeoffTypeName()
    {
        return $this->timeoffTypeName;
    }

    /**
     * @param string $timeoffTypeName
     * @return TimeoffType
     */
    public function setTimeoffTypeName($timeoffTypeName)
    {
        $this->timeoffTypeName = $timeoffTypeName;
        return $this;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return TimeoffType
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param int $createdBy
     * @return TimeoffType
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public static function getResourceName()
    {
        return 'timeoff_types';
    }

    public static function getResourceEndpoint()
    {
        return 'timeoff_types';
    }

    public static function getIdKey()
    {
        return 'timeoff_type_id';
    }

    public static function getIdProp()
    {
        return 'timeoffTypeId';
    }
}
