<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserMoviesPivotSeeder extends Seeder
{
    public function run()
    {
        // Configuration
        $userCount = DB::table('users')->count();
        $itemCount = DB::table('movies')->count();

        $data = [];

        for ($i = 0; $i < $userCount; $i++) {
            $data[] = [
                'user_id' => rand(1, $userCount), // Random user ID
                'movie_id' => rand(1, $itemCount), // Random item ID
                'click_count' => rand(0, 10),
                'rating' => rand(1, 5), // Random rating between 1 and 5
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Insert data into the table
        DB::table('user_movie_pivot')->insert($data);
    }
}
