<?php

namespace SixBySix\Float\Entity;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

class Client extends AbstractEntity implements ResourceInterface
{

    /**
     * @var int
     * @Type("integer")
     * @Groups({"update", "post", "get"})
     */
    protected $clientId;

    /**
     * @var int
     * @Type("integer")
     * @Groups({"update", "post", "get"})
     */
    protected $companyId;

    /**
     * @var string
     * @Type("string")
     * @Groups({"update", "post", "get"})
     */
    protected $clientName;

    /**
     * @var string
     * @Type("string")
     * @Groups({"update", "post", "get"})
     */
    protected $clientDesc;

    /**
     * @var int
     * @Type("integer")
     * @Groups({"update", "post", "get"})
     */
    protected $creatorId;

    /**
     * @var \DateTime
     * @Type("DateTime<'Y-m-d H:i:s'>")
     * @Groups({"update", "post", "get"})
     */
    protected $created;

    /**
     * @var bool
     * @Type("boolean")
     * @Groups({"update", "post", "get"})
     */
    protected $active;

    /**
     * @var \DateTime
     * @Type("DateTime<'Y-m-d H:i:s'>")
     * @Groups({"update", "post", "get"})
     */
    protected $modified;

    public function getId()
    {
        return $this->getClientId();
    }

    /**
     * @return int
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @return int
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * @param int $companyId
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
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
     * @return string
     */
    public function getClientDesc()
    {
        return $this->clientDesc;
    }

    /**
     * @param string $clientDesc
     */
    public function setClientDesc($clientDesc)
    {
        $this->clientDesc = $clientDesc;
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

    public static function getResourceName()
    {
        return 'clients';
    }

    public static function getResourceEndpoint()
    {
        return 'clients';
    }
}
