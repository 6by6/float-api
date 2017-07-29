<?php

namespace SixBySix\Float\Entity;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

class Timeoff extends AbstractResourceEntity
{
    /**
     * @var int
     * @Type("integer")
     * @Groups({"get", "update", "add"})
     */
    protected $timeoffId;

    /**
     * @var int
     * @Type("integer")
     * @Groups({"get", "update", "add"})
     */
    protected $timeoffTypeId;

    /**
     * @var \DateTime
     * @Type("DateTime<'Y-m-d'>")
     * @Groups({"update", "post", "get"})
     */
    protected $startDate;

    /**
     * @var \DateTime
     * @Type("DateTime<'Y-m-d'>")
     * @Groups({"update", "post", "get"})
     */
    protected $endDate;

    /**
     * @var float
     * @Type("float")
     * @Groups({"update", "post", "get"})
     */
    protected $hours;

    /**
     * @var string
     * @Type("string")
     * @Groups({"update", "post", "get"})
     */
    protected $timeoffNotes;

    /**
     * @var int
     * @Type("integer")
     * @Groups({"update", "post", "get"})
     */
    protected $modifiedBy;

    /**
     * @var int
     * @Type("integer")
     * @Groups({"update", "post", "get"})
     */
    protected $createdBy;

    /**
     * @var \DateTime
     * @Type("DateTime<'Y-m-d'>")
     * @Groups({"update", "post", "get"})
     */
    protected $created;

    /**
     * @var \DateTime
     * @Type("DateTime<'Y-m-d'>")
     * @Groups({"update", "post", "get"})
     */
    protected $modified;

    /**
     * @var bool
     * @Type("boolean")
     * @Groups({"update", "post", "get"})
     */
    protected $repeatState;

    /**
     * @var \DateTime
     * @Type("DateTime<'Y-m-d'>")
     * @Groups({"update", "post", "get"})
     */
    protected $repeatEnd;

    /**
     * @var bool
     * @Type("boolean")
     * @Groups({"update", "post", "get"})
     */
    protected $fullDay;

    /**
     * @var int
     * @Type("integer")
     * @Groups({"update", "post", "get"})
     */
    protected $peopleId;

    /**
     * @return int
     */
    public function getTimeoffId()
    {
        return $this->timeoffId;
    }

    /**
     * @param int $timeoffId
     * @return Timeoff
     */
    public function setTimeoffId($timeoffId)
    {
        $this->timeoffId = $timeoffId;
        return $this;
    }

    /**
     * @return int
     */
    public function getTimeoffTypeId()
    {
        return $this->timeoffTypeId;
    }

    /**
     * @param int $timeoffTypeId
     * @return Timeoff
     */
    public function setTimeoffTypeId($timeoffTypeId)
    {
        $this->timeoffTypeId = $timeoffTypeId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     * @return Timeoff
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param \DateTime $endDate
     * @return Timeoff
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return float
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * @param float $hours
     * @return Timeoff
     */
    public function setHours($hours)
    {
        $this->hours = $hours;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeoffNotes()
    {
        return $this->timeoffNotes;
    }

    /**
     * @param string $timeoffNotes
     * @return Timeoff
     */
    public function setTimeoffNotes($timeoffNotes)
    {
        $this->timeoffNotes = $timeoffNotes;
        return $this;
    }

    /**
     * @return int
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }

    /**
     * @param int $modifiedBy
     * @return Timeoff
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param int $createdBy
     * @return Timeoff
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
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
     * @return Timeoff
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
     * @return Timeoff
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRepeatState()
    {
        return $this->repeatState;
    }

    /**
     * @param bool $repeatState
     * @return Timeoff
     */
    public function setRepeatState($repeatState)
    {
        $this->repeatState = $repeatState;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRepeatEnd()
    {
        return $this->repeatEnd;
    }

    /**
     * @param \DateTime $repeatEnd
     * @return Timeoff
     */
    public function setRepeatEnd($repeatEnd)
    {
        $this->repeatEnd = $repeatEnd;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFullDay()
    {
        return $this->fullDay;
    }

    /**
     * @param bool $fullDay
     * @return Timeoff
     */
    public function setFullDay($fullDay)
    {
        $this->fullDay = $fullDay;
        return $this;
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
     * @return Timeoff
     */
    public function setPeopleId($peopleId)
    {
        $this->peopleId = $peopleId;
        return $this;
    }

    public static function getResourceName()
    {
        return 'timeoffs';
    }

    public static function getResourceEndpoint()
    {
        return 'timeoffs';
    }

    public static function getIdKey()
    {
        return 'timeoff_id';
    }

    public static function getIdProp()
    {
        return 'timeoffId';
    }
}
