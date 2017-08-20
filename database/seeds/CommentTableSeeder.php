<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Post::all()->each(function (App\Post $p)
        {
            $p->comments()->saveMany(factory(App\Comment::class, 3)->make());
        });
    }
}
