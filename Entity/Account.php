<?php

namespace SixBySix\Float\Entity;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;
use SixBySix\Float\FloatClient;

class Account extends AbstractEntity implements ResourceInterface
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
     * @param int $accountId
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
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

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getAccountTypeId()
    {
        return $this->accountTypeId;
    }

    /**
     * @param int $accountTypeId
     */
    public function setAccountTypeId($accountTypeId)
    {
        $this->accountTypeId = $accountTypeId;
    }

    /**
     * @return string
     */
    public function getAccountTypeName()
    {
        return $this->accountTypeName;
    }

    /**
     * @param string $accountTypeName
     */
    public function setAccountTypeName($accountTypeName)
    {
        $this->accountTypeName = $accountTypeName;
    }

    /**
     * @return int
     */
    public function getDepartmentFilterId()
    {
        return $this->departmentFilterId;
    }

    /**
     * @param int $departmentFilterId
     */
    public function setDepartmentFilterId($departmentFilterId)
    {
        $this->departmentFilterId = $departmentFilterId;
    }

    /**
     * @return int
     */
    public function getPeopleId()
    {
        return $this->peopleId;
    }

    /**
     * @param int $peopleId
     */
    public function setPeopleId($peopleId)
    {
        $this->peopleId = $peopleId;
    }

    /**
     * @return string
     */
    public function getSsoEmail()
    {
        return $this->ssoEmail;
    }

    /**
     * @param string $ssoEmail
     */
    public function setSsoEmail($ssoEmail)
    {
        $this->ssoEmail = $ssoEmail;
    }

    /**
     * @return string
     */
    public function getSsoType()
    {
        return $this->ssoType;
    }

    /**
     * @param string $ssoType
     */
    public function setSsoType($ssoType)
    {
        $this->ssoType = $ssoType;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * @param \DateTime $modified
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    }

    /**
     * @return boolean
     */
    public function isAccepted()
    {
        return $this->accepted;
    }

    /**
     * @param boolean $accepted
     */
    public function setAccepted($accepted)
    {
        $this->accepted = $accepted;
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
