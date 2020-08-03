<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('articles')->truncate();

        $date = "2020-01-01 00:00:";

        for ($i = 0; $i < 10; $i++) {
            \App\Article::create([
                'title' => 'Title ' . $i,
                'content' => 'This is ' . $i . 'content',
                'commit' => 'this is' .$i. 'commit',
                'user_id' => rand(1,3),
                'created_at' => $date . ($i + 10),
                'updated_at' => $date . ($i + 10),
            ]);
        }

    }

}
