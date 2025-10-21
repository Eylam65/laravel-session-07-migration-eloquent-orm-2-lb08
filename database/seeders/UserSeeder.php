<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = User::create([
            'name' => 'Anderies',
            'email' => 'anderies@example.com',
            'password' => bcrypt('password'),
        ]);

        # Create Relateed Profile
        $user->profile()->create([
            'phone' => '08123456789',
            'bio' => 'Lecturer and tech enthusiast.',
        ]);
    }
}
