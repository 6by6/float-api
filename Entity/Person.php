<?php

namespace SixBySix\Float\Entity;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

class Person extends AbstractResourceEntity
{

    /**
     * @var int
     * @Type("integer")
     * @Groups({"update", "post", "get"})
     */
    protected $peopleId;

    /**
     * @var string
     * @Type("string")
     * @Groups({"get", "add", "update"})
     */
    protected $name;

    /**
     * @var string
     * @Type("string")
     * @Groups({"get", "add", "update"})
     */
    protected $jobTitle;

    /**
     * @var string
     * @Type("string")
     * @Groups({"get", "add", "update"})
     */
    protected $avatarFile;

    /**
     * @var Department[]
     * @Type("array<SixBySix\Float\Entity\Department>")
     * @Groups({"get", "add", "update"})
     */
    protected $departments;

    /**
     * @var Skill[]
     * @Type("array<SixBySix\Float\Entity\Skill>")
     * @Groups({"get", "add", "update"})
     */
    protected $skills;

    /**
     * @var string
     * @Type("string")
     * @Groups({"get", "add", "update"})
     */
    protected $email;

    /**
     * @var string
     * @Type("string")
     * @Groups({"get", "add", "update"})
     */
    protected $description;

    /**
     * @var string
     * @Type("string")
     * @Groups({"get", "add", "update"})
     */
    protected $mobile;

    /**
     * @var string
     * @Type("string")
     * @Groups({"get", "add", "update"})
     */
    protected $telephone;

    /**
     * @var string
     * @Type("string")
     * @Groups({"get", "add", "update"})
     */
    protected $im;

    /**
     * @var float
     * @Type("float")
     * @Groups({"get", "add", "update"})
     */
    protected $wkDayHrs;

    /**
     * @var string
     * @Type("string")
     * @Groups({"get", "add", "update"})
     */
    protected $nonWkDays;

    /**
     * @var int
     * @Type("integer")
     * @Groups({"get", "add", "update"})
     */
    protected $employeeType;

    /**
     * @var bool
     * @Type("boolean")
     * @Groups({"get", "add", "update"})
     */
    protected $contractor;

    /**
     * @var int
     * @Type("integer")
     * @Groups({"get", "add", "update"})
     */
    protected $accessRights;

    /**
     * @var int
     * @Type("integer")
     * @Groups({"get", "add", "update"})
     */
    protected $accessId;

    /**
     * @var int
     * @Type("integer")
     * @Groups({"get", "add", "update"})
     */
    protected $departmentFilterId;

    /**
     * @var bool
     * @Type("boolean")
     * @Groups({"get", "add", "update"})
     */
    protected $autoEmail;

    /**
     * @var \DateTime
     * @Type("DateTime<'Y-m-d'>")
     * @Groups({"get", "add", "update"})
     */
    protected $created;

    /**
     * @var bool
     * @Type("boolean")
     * @Groups({"get", "add", "update"})
     */
    protected $active;

    public function getId()
    {
        return $this->peopleId;
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
     * @return Person
     */
    public function setPeopleId($peopleId)
    {
        $this->peopleId = $peopleId;
        return $this;
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
     * @return Person
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * @param string $jobTitle
     * @return Person
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getAvatarFile()
    {
        return $this->avatarFile;
    }

    /**
     * @param string $avatarFile
     * @return Person
     */
    public function setAvatarFile($avatarFile)
    {
        $this->avatarFile = $avatarFile;
        return $this;
    }

    /**
     * @return Department[]
     */
    public function getDepartments()
    {
        return $this->departments;
    }

    /**
     * @param Department[] $departments
     * @return Person
     */
    public function setDepartments($departments)
    {
        $this->departments = $departments;
        return $this;
    }

    /**
     * @return Skill[]
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * @param Skill[] $skills
     * @return Person
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;
        return $this;
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
     * @return Person
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Person
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     * @return Person
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     * @return Person
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * @return string
     */
    public function getIm()
    {
        return $this->im;
    }

    /**
     * @param string $im
     * @return Person
     */
    public function setIm($im)
    {
        $this->im = $im;
        return $this;
    }

    /**
     * @return float
     */
    public function getWkDayHrs()
    {
        return $this->wkDayHrs;
    }

    /**
     * @param float $wkDayHrs
     * @return Person
     */
    public function setWkDayHrs($wkDayHrs)
    {
        $this->wkDayHrs = $wkDayHrs;
        return $this;
    }

    /**
     * @return string
     */
    public function getNonWkDays()
    {
        return $this->nonWkDays;
    }

    /**
     * @param string $nonWkDays
     * @return Person
     */
    public function setNonWkDays($nonWkDays)
    {
        $this->nonWkDays = $nonWkDays;
        return $this;
    }

    /**
     * @return int
     */
    public function getEmployeeType()
    {
        return $this->employeeType;
    }

    /**
     * @param int $employeeType
     * @return Person
     */
    public function setEmployeeType($employeeType)
    {
        $this->employeeType = $employeeType;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isContractor()
    {
        return $this->contractor;
    }

    /**
     * @param boolean $contractor
     * @return Person
     */
    public function setContractor($contractor)
    {
        $this->contractor = $contractor;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccessRights()
    {
        return $this->accessRights;
    }

    /**
     * @param int $accessRights
     * @return Person
     */
    public function setAccessRights($accessRights)
    {
        $this->accessRights = $accessRights;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccessId()
    {
        return $this->accessId;
    }

    /**
     * @param int $accessId
     * @return Person
     */
    public function setAccessId($accessId)
    {
        $this->accessId = $accessId;
        return $this;
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
     * @return Person
     */
    public function setDepartmentFilterId($departmentFilterId)
    {
        $this->departmentFilterId = $departmentFilterId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isAutoEmail()
    {
        return $this->autoEmail;
    }

    /**
     * @param boolean $autoEmail
     * @return Person
     */
    public function setAutoEmail($autoEmail)
    {
        $this->autoEmail = $autoEmail;
        return $this;
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
     * @return Person
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     * @return Person
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    public static function getResourceName()
    {
        return 'people';
    }

    public static function getResourceEndpoint()
    {
        return 'people';
    }
}
