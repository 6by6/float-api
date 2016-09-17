<?php

namespace SixBySix\Float\Entity;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;
use SixBySix\Float\FloatClient;

class Project extends AbstractEntity implements ResourceInterface
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
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
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
     */
    public function setProjectName($projectName)
    {
        $this->projectName = $projectName;
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
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
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
     */
    public function setCommon($common)
    {
        $this->common = $common;
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
     */
    public function setCreatorId($creatorId)
    {
        $this->creatorId = $creatorId;
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
     */
    public function setTentative($tentative)
    {
        $this->tentative = $tentative;
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
     * @return int
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param int $clientId
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
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
     */
    public function setClientName($clientName)
    {
        $this->clientName = $clientName;
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
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
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
     */
    public function setNonBillable($nonBillable)
    {
        $this->nonBillable = $nonBillable;
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

    /**
     * @return Account[]
     */
    public function getProjectManagers()
    {
        return $this->projectManagers;
    }

    /**
     * @param Account[] $projectManagers
     */
    public function setProjectManagers($projectManagers)
    {
        $this->projectManagers = $projectManagers;
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
}
