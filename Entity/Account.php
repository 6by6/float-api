<?php

namespace SixBySix\Float\Entity;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;
use SixBySix\Float\FloatClient;

class Account extends AbstractResourceEntity
{
    /**
     * @var int
     * @Type("integer")
     * @Groups({"get", "update", "add"})
     */
    protected $accountId;

    /**
     * @var string
     * @Type("string")
     * @Groups({"get", "update", "add"})
     */
    protected $name;

    /**
     * @var string
     * @Type("string")
     * @Groups({"get", "update", "add"})
     */
    protected $email;

    /**
     * @var int
     * @Type("integer")
     * @Groups({"get", "update", "add"})
     */
    protected $accountTypeId;

    /**
     * @var string
     * @Type("string")
     * @Groups({"get", "update", "add"})
     */
    protected $accountTypeName;

    /**
     * @var int
     * @Type("integer")
     * @Groups({"get", "update", "add"})
     */
    protected $departmentFilterId;

    /**
     * @var int
     * @Type("integer")
     * @Groups({"get", "update", "add"})
     */
    protected $peopleId;

    /**
     * @var string
     * @Type("string")
     * @Groups({"get", "update", "add"})
     */
    protected $ssoEmail;

    /**
     * @var string
     * @Type("string")
     * @Groups({"get", "update", "add"})
     */
    protected $ssoType;

    /**
     * @var \DateTime
     * @Type("DateTime<'U'>")
     * @Groups({"get", "update", "add"})
     */
    protected $created;

    /**
     * @var \DateTime
     * @Type("DateTime<'U'>")
     * @Groups({"get", "update", "add"})
     */
    protected $modified;

    /**
     * @var bool
     * @Type("boolean")
     * @Groups({"get", "update", "add"})
     */
    protected $accepted;

    public function getId()
    {
        return $this->getAccountId();
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return int
     */
    public function getAccountTypeId()
    {
        return $this->accountTypeId;
    }

    /**
     * @return string
     */
    public function getAccountTypeName()
    {
        return $this->accountTypeName;
    }

    /**
     * @return int
     */
    public function getDepartmentFilterId()
    {
        return $this->departmentFilterId;
    }

    /**
     * @return int
     */
    public function getPeopleId()
    {
        return $this->peopleId;
    }

    /**
     * @return string
     */
    public function getSsoEmail()
    {
        return $this->ssoEmail;
    }

    /**
     * @return string
     */
    public function getSsoType()
    {
        return $this->ssoType;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * @return boolean
     */
    public function isAccepted()
    {
        return $this->accepted;
    }

    public static function getResourceName()
    {
        return 'accounts';
    }

    public static function getResourceEndpoint()
    {
        return 'accounts';
    }
}
