<?php

namespace App\Repositories;

use App\Interfaces\TaskInterface;
use App\Models\Task\Task;

class TaskRepository implements TaskInterface
{
    public function index()
    {
        return Task::all();
    }

    public function store(array $data)
    {
        return 'TaskRepository@store';
    }

    public function show(string $id)
    {
        return 'TaskRepository@show';
    }

    public function update(string $id, array $data)
    {
        return 'TaskRepository@update';
    }

    public function destroy(string $id)
    {
        return 'TaskRepository@destroy';
    }
}