<?php

namespace Modules\TodoStatus\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\TodoStatus\Models\TodoStatus;

class TodoStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TodoStatus::insert([
            [ 'name' => 'Новая'],
            [ 'name' => 'В работе'],
            [ 'name' => 'Завершён'],
            [ 'name' => 'Отменено'],
        ]);
    }
}
