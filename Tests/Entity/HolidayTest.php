<?php

namespace SixBySix\Float\Tests\Entity;

use SixBySix\Float\Entity\Holiday;

class HolidayTest extends AbstractEntityTest
{
    public function getClass()
    {
        return Holiday::class;
    }

    /**
     * @test
     */
    public function hydrate()
    {
        /** @var array $data */
        $data = $this->getTestHydrationData('holiday.json');

        /** @var Holiday $holiday */
        $holiday = Holiday::deserialize($data);

        $this->assertEquals(1533, $holiday->getId());
        $this->assertEquals("Office Closed", $holiday->getHolidayName());

        $this->assertInstanceOf(\DateTime::class, $holiday->getDate());
        $this->assertEquals('2014-04-01', $holiday->getDate()->format('Y-m-d'));

        $this->assertInstanceOf(\DateTime::class, $holiday->getEndDate());
        $this->assertEquals('2014-04-02', $holiday->getEndDate()->format('Y-m-d'));
    }
}
