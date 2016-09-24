<?php

namespace SixBySix\Float\Entity;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;
use SixBySix\Float\FloatClient;

class Milestone extends AbstractResourceEntity
{
    /**
     * @var int
     * @Type("integer")
     * @Groups({"get", "update", "add"})
     */
    protected $holidayId;

    /**
     * @var string
     * @Type("string")
     * @Groups({"get", "update", "add"})
     */
    protected $holidayName;

    /**
     * @var \DateTime
     * @Type("DateTime<'Y-m-d'>")
     * @Groups({"get", "update", "add"})
     */
    protected $date;

    /**
     * @var \DateTime
     * @Type("DateTime<'Y-m-d'>")
     * @Groups({"get", "update", "add"})
     */
    protected $endDate;

    /**
     * @var int
     * @Type("integer")
     * @Groups({"get", "update", "add"})
     */
    protected $dayDoy;

    public function getId()
    {
        return $this->getMilestoneId();
    }

    /**
     * @return int
     */
    public function getHolidayId()
    {
        return $this->holidayId;
    }

    /**
     * @param int $holidayId
     * @return Milestone
     */
    public function setHolidayId($holidayId)
    {
        $this->holidayId = $holidayId;
        return $this;
    }

    /**
     * @return string
     */
    public function getHolidayName()
    {
        return $this->holidayName;
    }

    /**
     * @param string $holidayName
     * @return Milestone
     */
    public function setHolidayName($holidayName)
    {
        $this->holidayName = $holidayName;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return Milestone
     */
    public function setDate($date)
    {
        $this->date = $date;
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
     * @return Milestone
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getDayDoy()
    {
        return $this->dayDoy;
    }

    /**
     * @param int $dayDoy
     * @return Milestone
     */
    public function setDayDoy($dayDoy)
    {
        $this->dayDoy = $dayDoy;
        return $this;
    }

    public static function getResourceEndpoint()
    {
        return 'milestones';
    }

    public static function getResourceName()
    {
        return 'milestones';
    }

    public static function getIdKey()
    {
        return 'milestone_id';
    }

    public static function getIdProp()
    {
        return 'milestoneId';
    }
}
