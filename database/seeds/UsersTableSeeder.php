<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 500)->create()->each(function ($u) {
            $u->user()->save(factory(\App\Post::class)->make());
        });
        factory(App\Posts::class, 500)->create()->each(function ($u) {
            $u->posts()->save(factory(\App\Post::class)->make());
        });
    }
}
