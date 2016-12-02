<?php

namespace SixBySix\Float\Entity;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use SixBySix\Float\FloatClient;

class Department extends AbstractResourceEntity
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
    protected $departmentName;

    public function getId()
    {
        return $this->departmentId;
    }

    /**
     * @return int
     */
    public function getDepartmentId()
    {
        return $this->getId();
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->departmentName;
    }

    /**
     * @param string $name
     * @return Department
     */
    public function setName($name)
    {
        $this->departmentName = $name;
        return $this;
    }
    
    public static function getResourceName()
    {
        return 'departments';
    }

    public static function getResourceEndpoint()
    {
        return 'departments';
    }

    public static function getIdKey()
    {
        return 'department_id';
    }

    public static function getIdProp()
    {
        return 'departmentId';
    }

    public static function getAll(array $opts = [])
    {
        $opts = static::formatQueryOpts($opts);

        $response = FloatClient::get(static::getResourceName(), $opts);

        $collection = [];

        if (sizeof($response) == 0) {
            return $collection;
        }

        foreach ($response as $deptData) {
            $collection[] = static::deserialize($deptData);
        }

        return $collection;
    }
}
