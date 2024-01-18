<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Ana',
                'email' => 'ana@gmail.com',
                'password' => bcrypt('Uni10pass!'),
                'role' => 'developer'
            ],
            [
                'name' => 'Sofiya',
                'email' => 'anis@gmail.com',
                'password' => bcrypt('Uni10pass!'),
                'role' => 'developer'
            ],
            [
                'name' => 'Anis',
                'email' => 'safwa@gmail.com',
                'password' => bcrypt('Uni10pass!'),
                'role' => 'developer'
            ],
            [
                'name' => 'Safwa',
                'email' => 'sofiya@gmail.com',
                'password' => bcrypt('Uni10pass!'),
                'role' => 'developer'
            ],
            [
                'name' => 'Ulya',
                'email' => 'hasbe@gmail.com',
                'password' => bcrypt('Uni10pass!'),
                'role' => 'developer'
            ],
            [
                'name' => 'Zuliyana',
                'email' => 'zuliyana@gmail.com',
                'password' => bcrypt('Uni10pass!'),
                'role' => 'developer'
            ],
            [
                'name' => 'Fahima',
                'email' => 'ulya@gmail.com',
                'password' => bcrypt('Uni10pass!'),
                'role' => 'developer'
            ],
            [
                'name' => 'Huda',
                'email' => 'huda@gmail.com',
                'password' => bcrypt('Uni10pass!'),
                'role' => 'developer'
            ]
        ];

// Loop through the array to create users in a seeder or similar setup
        foreach ($users as $user) {
            User::create($user);
        }

    }
}
