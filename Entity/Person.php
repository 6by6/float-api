<?php

namespace SixBySix\Float\Entity;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

class Person extends AbstractEntity implements ResourceInterface
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
     */
    public function setPeopleId($peopleId)
    {
        $this->peopleId = $peopleId;
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
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * @param string $jobTitle
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
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
     */
    public function setAvatarFile($avatarFile)
    {
        $this->avatarFile = $avatarFile;
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
     */
    public function setDepartments($departments)
    {
        $this->departments = $departments;
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
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;
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
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
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
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
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
     */
    public function setIm($im)
    {
        $this->im = $im;
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
     */
    public function setWkDayHrs($wkDayHrs)
    {
        $this->wkDayHrs = $wkDayHrs;
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
     */
    public function setNonWkDays($nonWkDays)
    {
        $this->nonWkDays = $nonWkDays;
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
     */
    public function setEmployeeType($employeeType)
    {
        $this->employeeType = $employeeType;
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
     */
    public function setContractor($contractor)
    {
        $this->contractor = $contractor;
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
     */
    public function setAccessRights($accessRights)
    {
        $this->accessRights = $accessRights;
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
     */
    public function setAccessId($accessId)
    {
        $this->accessId = $accessId;
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
     * @return boolean
     */
    public function isAutoEmail()
    {
        return $this->autoEmail;
    }

    /**
     * @param boolean $autoEmail
     */
    public function setAutoEmail($autoEmail)
    {
        $this->autoEmail = $autoEmail;
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
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
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
