<?php

namespace SixBySix\Float\Entity;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;
use SixBySix\Float\FloatClient;

class Department extends AbstractEntity implements ResourceInterface
{
    /**
     * @var int
     * @Type("integer")
     * @Groups({"get", "update", "add"})
     */
    protected $departmentId;

    /**
     * @var string
     * @Type("string")
     * @Groups({"get", "update", "add"})
     */
    protected $name;

    /**
     * @return int
     */
    public function getDepartmentId()
    {
        return $this->departmentId;
    }

    /**
     * @param int $departmentId
     */
    public function setDepartmentId($departmentId)
    {
        $this->departmentId = $departmentId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getId()
    {
        return $this->getDepartmentId();
    }

    public static function getResourceName()
    {
        return 'departments';
    }

    public static function getResourceEndpoint()
    {
        return 'departments';
    }

    public static function getAll(array $opts = [])
    {
        $opts = static::formatQueryOpts($opts);

        $response = FloatClient::get(static::getResourceName(), $opts);

        $collection = [];

        foreach ($response as $deptData) {
            $collection[] = static::deserialize($deptData);
        }

        return $collection;
    }
}
