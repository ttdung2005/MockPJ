<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('posts')->insert(
            [
                [
                    'title' => 'Welcome',
                    'content' => 'Hello. Nice to meet you',
                    'userId' => '1',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

            ]
        );
    }
}
