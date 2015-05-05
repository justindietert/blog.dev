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
            $post = Post::create([
                'title' => $faker->text(20),
                'slug' => $faker->text(20),
                'body' => $faker->sentence($rand_body),
                'user_id' => rand(1, 100)
            ]);
        }

        // for ($i = 1; $i <= 10; $i++) {
        //     $post = new Post();
        //     $post->title = "Title $i";
        //     $post->slug = $post->title;
        //     $post->body = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, consectetur, cupiditate dolorum hic expedita nam minus illo voluptates placeat veritatis numquam, dolor facilis? Ipsam sit maxime temporibus deleniti ipsum, dolorem, sapiente enim aspernatur distinctio esse laborum porro debitis voluptates soluta tenetur. Fugiat commodi asperiores et harum consequatur dignissimos sed at!";
        //     $post->user_id = 1;
        //     $post->save();
        // }
    }
}
