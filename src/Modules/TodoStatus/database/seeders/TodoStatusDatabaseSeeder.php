<?php

namespace Modules\TodoStatus\Database\Seeders;

use Illuminate\Database\Seeder;

class TodoStatusDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            TodoStatusSeeder::class
        ]);
    }
}
