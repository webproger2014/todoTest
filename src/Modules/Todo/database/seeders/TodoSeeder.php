<?php

namespace Modules\Todo\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Todo\Models\Todo;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Todo::factory()->count(200)->create();
    }
}
