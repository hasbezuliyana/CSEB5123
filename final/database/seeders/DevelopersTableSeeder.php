<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Developer;

class DevelopersTableSeeder extends Seeder
{
    public function run()
    {
        $developers = User::where('role', 'developer')->get();

        foreach ($developers as $user) {
            Developer::create([
                'user_id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,

            ]);
        }
    }
}

