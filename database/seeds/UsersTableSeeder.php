<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$L3.86cuydmo8NWVdxiBNdOo0qIYqaXjfXd/E1QxVK2heNfDu7Nb62',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
