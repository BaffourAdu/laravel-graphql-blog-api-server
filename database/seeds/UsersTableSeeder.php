<?php

use App\User;
use App\Article;
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
        $faker = \Faker\Factory::create();
        
        /**
         * Creates dummy Users and for each of them
         * creates 5 articles 
         * 
         */
        factory(User::class, 50)->create()->each(function($user) use ($faker){
            for ($i=0; $i < 5; $i++) {
                Article::create([
                    'user_id' => $user->id,
                    'title' => $faker->sentence,
                    'content' => $faker->paragraphs(3,true),
                ]);
            }
        });

        /**
         * Creates a User with the credentials:
         * enail: me@mygraphqlapp.com
         * password: secret
         * 
         */ 
        User::create([
            'name' => $faker->name,
            'email' => 'me@mygraphqlapp.com',
            'password' => bcrypt('secret')
        ]);
    }
}
