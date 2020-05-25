<?php

use Illuminate\Database\Seeder;
use App\Post;
// use DB;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    //    $post = new Post();
    //    $post->title = "This titel from seeder 1";
    //    $post->body = "This titel from seeder body 1";
    //    $post->save();

    //    $post2 = new Post();
    //    $post2->title = "This titel from seeder 2";
    //    $post2->body = "This titel from seeder body 2";
    //    $post2->save();

    //    $post3 = new Post();
    //    $post3->title = "This titel from seeder 3";
    //    $post3->body = "This titel from seeder body 3";
    //    $post3->save();


       DB::table('posts')->insert([
           ['title' => 'This titel from seeder 1' , 'body' => 'This titel from seeder body 1'] ,
           ['title' => 'This titel from seeder 2' , 'body' => 'This titel from seeder body 2'],
           ['title' => 'This titel from seeder 3' , 'body' => 'This titel from seeder body 3'],
           ['title' => 'This titel from seeder 4' , 'body' => 'This titel from seeder body 4']
            ]);

    }
}
