<?php

namespace Database\Seeders;

use App\Models\Task\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'name' => 'Task 1',
            'description' => 'Description for Task 1',
            'is_completed' => false,
        ]);
    }
}
