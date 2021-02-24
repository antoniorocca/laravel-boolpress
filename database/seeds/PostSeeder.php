<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts_list = config('post');

        foreach ($posts_list as $post) {
            $newPost = new Post();
            $newPost->title = $post['title'];
            $newPost->body = $post['body'];
            $newPost->save();
        }
    }
}
