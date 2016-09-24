<?php

namespace SixBySix\Float\Entity;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

class Client extends AbstractResourceEntity
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
     * @return $this
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
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
     * @return $this
     */
    public function setClientName($clientName)
    {
        $this->clientName = $clientName;
        return $this;
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
     * @return $this
     */
    public function setClientDesc($clientDesc)
    {
        $this->clientDesc = $clientDesc;
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
     * @return $this
     */
    public function setCreatorId($creatorId)
    {
        $this->creatorId = $creatorId;
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
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     * @return $this
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
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
