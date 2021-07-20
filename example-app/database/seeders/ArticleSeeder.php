<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'author_name' => Str::randome(10),
            'title' => Str::random(10),
            'description' => Str::random(10),
            'date_of_publish' => Carbon::now()->random(10),
        ]);
    }
}
