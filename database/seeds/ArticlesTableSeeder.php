<?php

use Illuminate\Database\Seeder;
use App\Article;
use Faker\Factory;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();
        $faker = Factory::create();

        for($i=0;$i<10;$i++){

        	Article::create([

        		'title' => $faker->sentence,
        		'body' => $faker->paragraph,


        		]);


        }
    }
}
