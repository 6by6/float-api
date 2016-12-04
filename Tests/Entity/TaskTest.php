<?php

namespace SixBySix\Float\Tests\Entity;

use SixBySix\Float\Entity\Person;
use SixBySix\Float\Entity\Project;
use SixBySix\Float\Entity\Task;
use SixBySix\Float\Exception\EntityNotFoundException;

class TaskTest extends AbstractEntityTest
{
    public function getClass()
    {
        return Task::class;
    }

    /**
     * @test
     */
    public function hydrate()
    {
        /** @var string $json */
        $json = file_get_contents(__DIR__ . '/json/task.json');

        /** @var array $data */
        $data = json_decode($json, true);

        /** @var Task $task */
        $task = Task::deserialize($data);

        $this->assertEquals(2148095612, $task->getId());
        $this->assertEquals("Design", $task->getTaskName());
        $this->assertEquals("See related ticket.", $task->getTaskNotes());
    }



    /**
     * @test
     */
    public function save()
    {
        /** @var Person $person */
        $person = Person::query()->where('$x ==> $x->getName() == "George"')->first();

        /** @var Project $project */
        $project = Project::query()->where('$x ==> $x->getProjectName() == "White Album"')->first();

        $task = new Task();
        $task->setTaskName("Write 'While My Guitar Gently Weeps'");
        $task->setPerson($person);
        $task->setProject($project);

        $date = new \DateTime();
        $date->modify('next Tuesday');

        $task->setStartDate($date);
        $task->setEndDate($date);
        $task->setHoursPerDay(4);
        $task->save();


        $this->assertInternalType("int", $task->getId());
    }

    /**
     * @test
     */
    public function update()
    {
        /** @var Task $task */
        $task = Task::query()->first('$x ==> $x->getTaskName() == "Write \'While My Guitar Gently Weeps\'"');

        /** @var int $taskId */
        $taskId = $task->getId();

        $task->setTaskName("Write 'Long, Long, Long'");
        $task->setHoursPerDay(5);
        $task->save();

        $task = Task::getById($taskId);
        $this->assertEquals("Write 'Long, Long, Long'", $task->getTaskName());
        $this->assertEquals(5, $task->getHoursPerDay());
    }

    /**
     * @test
     */
    public function delete()
    {
        /** @var Task $task */
        $task = Task::query()->first('$x ==> $x->getTaskName() == "Write \'Long, Long, Long\'"');

        $taskId = $task->getId();

        $task->delete();

        $this->expectException(EntityNotFoundException::class);
        Task::getById($taskId);
    }
}
