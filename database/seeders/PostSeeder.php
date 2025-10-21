<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::all()->each(function (User $user) {
            if ($user->posts()->count() === 0) {
                // create random number of posts and attach to user
                // Post::factory is calling factories/PostFactory.php
                $posts = Post::factory()->count(rand(1,5))->make()->toArray();
                // Save via relationship to ensure user_id set
                $user->posts()->createMany($posts);
            }
        });
    }
}
