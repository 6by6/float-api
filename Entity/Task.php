<?php

namespace SixBySix\Float\Entity;

use SixBySix\Float\FloatClient;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

class Task extends AbstractResourceEntity
{
    /**
     * @var int
     * @Type("integer")
     * @Groups({"update", "post", "get"})
     */
    protected $taskId;

    /**
     * @var string
     * @Type("string")
     * @Groups({"update", "post", "get"})
     */
    protected $taskName;

    /**
     * @var string
     * @Type("string")
     * @Groups({"update", "post", "get"})
     */
    protected $taskNotes;

    /**
     * @var int
     * @Type("integer")
     * @Groups({"update", "post", "get"})
     */
    protected $peopleId;

    /**
     * @var string
     * @Type("string")
     * @Groups({"update", "post", "get"})
     */
    protected $personName;

    /**
     * @var int
     * @Type("integer")
     * @Groups({"update", "post", "get"})
     */
    protected $projectId;

    /**
     * @var string
     * @Type("string")
     * @Groups({"update", "post", "get"})
     */
    protected $projectName;

    /**
     * @var string
     * @Type("string")
     * @Groups({"update", "post", "get"})
     */
    protected $clientName;

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
    protected $hoursPDay;

    /**
     * @var float
     * @Type("float")
     * @Groups({"update", "post", "get"})
     */
    protected $taskCalDays;

    /**
     * @var string
     * @Type("string")
     * @Groups({"update", "post", "get"})
     */
    protected $createdBy;

    /**
     * @var int
     * @Type("integer")
     * @Groups({"update", "post", "get"})
     */
    protected $creatorId;

    /**
     * @var string
     * @Type("string")
     * @Groups({"update", "post", "get"})
     */
    protected $modifiedBy;

    /**
     * @var int
     * @Type("integer")
     * @Groups({"update", "post", "get"})
     */
    protected $priority;

    public function getId()
    {
        return $this->getTaskId();
    }

    /**
     * @return int
     */
    public function getTaskId()
    {
        return $this->taskId;
    }

    /**
     * @return string
     */
    public function getTaskName()
    {
        return $this->taskName;
    }

    /**
     * @param string $taskName
     * @return Task
     */
    public function setTaskName($taskName)
    {
        $this->taskName = $taskName;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaskNotes()
    {
        return $this->taskNotes;
    }

    /**
     * @param string $taskNotes
     * @return Task
     */
    public function setTaskNotes($taskNotes)
    {
        $this->taskNotes = $taskNotes;
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
     * @return Task
     */
    public function setPeopleId($peopleId)
    {
        $this->peopleId = $peopleId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * @param string $personName
     * @return Task
     */
    public function setPersonName($personName)
    {
        $this->personName = $personName;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     * @return Task
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjectName()
    {
        return $this->projectName;
    }

    /**
     * @param string $projectName
     * @return Task
     */
    public function setProjectName($projectName)
    {
        $this->projectName = $projectName;
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
     * @return Task
     */
    public function setClientName($clientName)
    {
        $this->clientName = $clientName;
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
     * @return Task
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
     * @return Task
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return float
     */
    public function getHoursPDay()
    {
        return $this->hoursPDay;
    }

    /**
     * @param float $hoursPDay
     * @return Task
     */
    public function setHoursPDay($hoursPDay)
    {
        $this->hoursPDay = $hoursPDay;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaskCalDays()
    {
        return $this->taskCalDays;
    }

    /**
     * @param float $taskCalDays
     * @return Task
     */
    public function setTaskCalDays($taskCalDays)
    {
        $this->taskCalDays = $taskCalDays;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param string $createdBy
     * @return Task
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
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
     * @return Task
     */
    public function setCreatorId($creatorId)
    {
        $this->creatorId = $creatorId;
        return $this;
    }

    /**
     * @return string
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }

    /**
     * @param string $modifiedBy
     * @return Task
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;
        return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     * @return Task
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    public static function getAll(array $opts = [])
    {
        $opts = static::formatQueryOpts($opts);

        $response = FloatClient::get(static::getResourceName(), $opts);

        $collection = [];

        if (sizeof($response) == 0) {
            return $collection;
        }

        foreach ($response['people'] as $person) {
            foreach ($person['tasks'] as $taskData) {
                $collection[] = static::deserialize($taskData);
            }
        }

        return $collection;
    }

    public static function getByPersonId($personId, \DateTime $startDay = null, $weeks = null)
    {
        $opts = [
            'people_id' => $personId,
            'start_day' => $startDay,
            'weeks' => $weeks,
        ];

        return static::getAll($opts);
    }

    public static function getByPerson(Person $person, \DateTime $startDay = null, $weeks = null)
    {
        return static::getByPersonId($person->getId(), $startDay, $weeks);
    }

    public static function formatQueryOpts(array $opts)
    {
        $newOpts = [];

        if (isset($opts['start_day']) && $opts['start_day'] instanceof \DateTime) {
            /** @var \DateTime $date */
            $date = $opts['start_day'];
            $newOpts['start_day'] = $date->format('Y-m-d');
        }

        if (isset($opts['weeks'])) {
            $newOpts['weeks'] = (int) $opts['weeks'];
        }

        if (isset($opts['people_id'])) {
            $newOpts['people_id'] = (int) $opts['people_id'];
        }

        return parent::formatQueryOpts($newOpts);
    }

    public static function getResourceName()
    {
        return 'tasks';
    }

    public static function getResourceEndpoint()
    {
        return 'tasks';
    }

    public static function getIdKey()
    {
        return 'task_id';
    }

    public static function getIdProp()
    {
        return 'taskId';
    }
}
