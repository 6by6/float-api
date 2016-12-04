<?php

namespace SixBySix\Float\Entity;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;
use SixBySix\Float\FloatClient;

class Holiday extends AbstractResourceEntity
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
        return $this->getHolidayId();
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
     * @return Holiday
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
     * @return Holiday
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
     * @return Holiday
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
     * @return Holiday
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
     * @return Holiday
     */
    public function setDayDoy($dayDoy)
    {
        $this->dayDoy = $dayDoy;
        return $this;
    }

    public static function getResourceEndpoint()
    {
        return 'holidays';
    }

    public static function getResourceName()
    {
        return 'holidays';
    }

    public static function getIdKey()
    {
        return 'holiday_id';
    }

    public static function getIdProp()
    {
        return 'holidayId';
    }
}
