<?php

use Faker\Factory;

class PostsTableSeeder extends Seeder
{
    /**
     * Fill db with post(s).
     *
     * @return void
     */

    public function run()
    {
        DB::table('posts')->delete();

        $faker = Factory::create();

        for ($i = 1; $i <= 100; $i++) {
            $rand_body  = rand(50, 300);
            $rand_title = rand(2, 4);

            $post = new Post();
            $post->title = $faker->sentence($rand_title);
            $post->slug = $post->title;
            $post->body = $faker->sentence($rand_body);
            $post->user_id = rand(1, 100);
            $post->save();
        }

    }

}
