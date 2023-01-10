<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user1 = User::factory()->create([
            'name' => 'z0mbiebrad'
        ]);
        $cats1 = Category::factory()->create([
            'slug' => 'odio'
        ]);
        Post::factory(10)->create([
            'user_id' => $user1->id,
            'category_id' => $cats1
        ]);
        $user2 = User::factory()->create([
            'name' => 'fullstackalien'
        ]);
        $cats2 = Category::factory()->create([
            'slug' => 'infernum'
        ]);
        Post::factory(10)->create([
            'user_id' => $user2->id,
            'category_id' => $cats2
        ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
