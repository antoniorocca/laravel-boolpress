<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {       
        for ($i=0; $i < 15; $i++) { 
            $newTag = new Tag();
            $newTag->name = $faker->word(7);
            $newTag->save();
        }
    }
}
