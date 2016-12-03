<?php

namespace SixBySix\Float\Tests\Entity;

use SixBySix\Float\Entity\Project;
use SixBySix\Float\Entity\Task;

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
    public function filter()
    {
        $task = Task::query()->where('$x ==> $x->getTaskName() == "Write Yesterday"')->first();
        $this->assertInstanceOf(Task::class, $task);
    }

    /**
     * @_test
     */
    public function save()
    {
        $task = new Task();
        $task->setTaskName("Write 'While My Guitar Gently Weeps'");
    }
}
