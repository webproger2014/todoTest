<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\User\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
           [
            'login' => '9220712459',
            'name' => 'Павел'
           ],

           [
            'login' => '9220712458',
            'name' => 'Иван'
           ],

           [
            'login' => '9220712457',
            'name' => 'Алексей'
           ]
        ];

        $users = array_map(static function ($user) {
            $now = now();

            $user['created_at'] = $now;
            $user['updated_at'] = $now;

            return $user;

        }, $users);

        User::insert($users);
    }
}
