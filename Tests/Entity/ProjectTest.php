<?php

namespace SixBySix\Float\Tests\Entity;

use SixBySix\Float\Entity\Account;
use SixBySix\Float\Entity\Project;

class ProjectTest extends AbstractEntityTest
{
    public function getClass()
    {
        return Project::class;
    }

    /**
     * @test
     */
    public function hydrate()
    {
        /** @var array $data */
        $data = $this->getTestHydrationData('person.json');

        /** @var Project $project */
        $project = Project::deserialize($data);

        $this->assertEquals(223, $project->getId());
        $this->assertEquals("iPhone App", $project->getProjectName());
        $this->assertEquals(
            "Marquee project for us. Need to consider a contractor with app dev skills.",
            $project->getDescription()
        );
        $this->assertEquals("9e7fba", $project->getColor());
        $this->assertEquals(212, $project->getClientId());
        $this->assertEquals("Violet City", $project->getClientName());
        $this->assertEquals(false, $project->isCommon());
        $this->assertEquals(18262, $project->getCreatorId());
        $this->assertEquals("2014-11-19", $project->getCreated()->format('Y-m-d'));
        $this->assertEquals(["IPHONE APP", "MEDIUM"], $project->getTags());
        $this->assertEquals(false, $project->isNonBillable());
        $this->assertEquals(true, $project->isActive());

        foreach ($project->getProjectManagers() as $projectManager) {
            $this->assertInstanceOf(Account::class, $projectManager);
        }
    }


    public function create()
    {
        $project = new Project();
    }
}
