<?php

namespace SixBySix\Float\Entity;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;
use SixBySix\Float\FloatClient;

class Project extends AbstractResourceEntity
{
    /**
     * @var int
     * @Type("integer")
     * @Groups({"get", "update", "add"})
     */
    protected $projectId;

    /**
     * @var string
     * @Type("string")
     * @Groups({"get", "update", "add"})
     */
    protected $projectName;

    /**
     * @var string
     * @Type("string")
     * @Groups({"get", "update", "add"})
     */
    protected $description;

    /**
     * @var string
     * @Type("string")
     * @Groups({"get", "update", "add"})
     */
    protected $color;

    /**
     * @var bool
     * @Type("boolean")
     * @Groups({"get", "update", "add"})
     */
    protected $common;

    /**
     * @var int
     * @Type("integer")
     * @Groups({"get", "update", "add"})
     */
    protected $creatorId;

    /**
     * @var bool
     * @Type("boolean")
     * @Groups({"get", "update", "add"})
     */
    protected $tentative;

    /**
     * @var \DateTime
     * @Type("DateTime<'Y-m-d'>")
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
     * @var int
     * @Type("integer")
     * @Groups({"get", "update", "add"})
     */
    protected $clientId;

    /**
     * @var string
     * @Type("string")
     * @Groups({"get", "update", "add"})
     */
    protected $clientName;

    /**
     * @var string[]
     * @Type("array<string>")
     * @Groups({"get", "update", "add"})
     */
    protected $tags;

    /**
     * @var bool
     * @Type("boolean")
     * @Groups({"get", "update", "add"})
     */
    protected $nonBillable;

    /**
     * @var bool
     * @Type("boolean")
     * @Groups({"get", "update", "add"})
     */
    protected $active;

    /**
     * @var Account[]
     * @Type("array<SixBySix\Float\Entity\Account>")
     * @Groups({"get", "update", "add"})
     */
    protected $projectManagers;

    public function getId()
    {
        return $this->getProjectId();
    }

    /**
     * @return int
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     * @return Project
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjectName()
    {
        return $this->projectName;
    }

    /**
     * @param string $projectName
     * @return Project
     */
    public function setProjectName($projectName)
    {
        $this->projectName = $projectName;
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
     * @return Project
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * @return Project
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCommon()
    {
        return $this->common;
    }

    /**
     * @param boolean $common
     * @return Project
     */
    public function setCommon($common)
    {
        $this->common = $common;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreatorId()
    {
        return $this->creatorId;
    }

    /**
     * @param int $creatorId
     * @return Project
     */
    public function setCreatorId($creatorId)
    {
        $this->creatorId = $creatorId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isTentative()
    {
        return $this->tentative;
    }

    /**
     * @param boolean $tentative
     * @return Project
     */
    public function setTentative($tentative)
    {
        $this->tentative = $tentative;
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
     * @return Project
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
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
     * @return Project
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
        return $this;
    }

    /**
     * @return int
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param int $clientId
     * @return Project
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientName()
    {
        return $this->clientName;
    }

    /**
     * @param string $clientName
     * @return Project
     */
    public function setClientName($clientName)
    {
        $this->clientName = $clientName;
        return $this;
    }

    /**
     * @return \string[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param \string[] $tags
     * @return Project
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isNonBillable()
    {
        return $this->nonBillable;
    }

    /**
     * @param boolean $nonBillable
     * @return Project
     */
    public function setNonBillable($nonBillable)
    {
        $this->nonBillable = $nonBillable;
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
     * @return Project
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return Account[]
     */
    public function getProjectManagers()
    {
        return $this->projectManagers;
    }

    /**
     * @param Account[] $projectManagers
     * @return Project
     */
    public function setProjectManagers($projectManagers)
    {
        $this->projectManagers = $projectManagers;
        return $this;
    }

    public static function getAllArchived(array $opts = [])
    {
        $opts['active'] = 0;
        return static::getAll($opts);
    }

    public static function getAllActive(array $opts = [])
    {
        $opts['active'] = 1;
        return static::getAll($opts);
    }

    public static function getResourceEndpoint()
    {
        return 'projects';
    }

    public static function getResourceName()
    {
        return 'projects';
    }

    public static function getIdKey()
    {
        return 'project_id';
    }

    public static function getIdProp()
    {
        return 'projectId';
    }
}
