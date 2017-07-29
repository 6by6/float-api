<?php

namespace SixBySix\Float\Tests\Entity;

use SixBySix\Float\Entity\Milestone;

class MilestoneTest extends AbstractEntityTest
{
    public function getClass()
    {
        return Milestone::class;
    }

    /**
     * @test
     */
    public function hydrate()
    {
        /** @var array $data */
        $data = $this->getTestHydrationData('milestone.json');

        /** @var Milestone $milestone */
        $milestone = Milestone::deserialize($data);

        $this->assertEquals(1533, $milestone->getId());
        $this->assertEquals("Release Album", $milestone->getMilestoneName());

        $this->assertInstanceOf(\DateTime::class, $milestone->getDate());
        $this->assertEquals('2014-04-01', $milestone->getDate()->format('Y-m-d'));

        $this->assertInstanceOf(\DateTime::class, $milestone->getEndDate());
        $this->assertEquals('2014-04-02', $milestone->getEndDate()->format('Y-m-d'));
    }
}
