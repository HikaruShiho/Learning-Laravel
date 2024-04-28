<?php

namespace App\Services;

use App\Interfaces\TaskInterface;

class TaskService
{
    public function __construct(TaskInterface $taskInterface)
    {
        $this->taskInterface = $taskInterface;
    }

    public function index()
    {
        return $this->taskInterface->index();
    }
}
