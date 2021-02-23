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
    public function run()
    {
        $tags_list = config('tag');

        foreach ($tags_list as $tag) {
            $newTag = new Tag();
            $newTag->name = $tag['name'];
            $newTag->body = $tag['body'];
            $newTag->save();
        }
    }
}
