<?php

namespace Modules\Todo\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Todo\Models\Todo::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $now = now();
        $updatedAt = $now;

    //    $deadlineAt = fake()->dateTimeInInterval('-1 week', '+3 days');

        return [
           'name' => fake()->sentence(),
            'desc' => fake()->realText(rand(200, 800)),
            'creator_id' => rand(1, 3),
            'responsible_id' => rand(1, 3),
            'todo_status_id' => rand(1, 4),
            'created_at' => $now,
            'updated_at' => $updatedAt,
            'deadline_at' => fake()->dateTimeInInterval($now, '+3 days'),
            'deleted_at' => rand(1, 5) !== 3 ? null : fake()->dateTimeInInterval($now, '+3 days')
        ];
    }
}

