<?php

use App\Article;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {       
        for ($i=0; $i < 20; $i++) { 
            $newArt = new Article();
            $newArt->title = $faker->word(5);
            $newArt->body = $faker->text(200);
            $newArt->save();
        }
    }
}
