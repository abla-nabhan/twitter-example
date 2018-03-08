<?php

use Illuminate\Database\Seeder;
use App\Models\Tweet;
use App\User;
use App\Models\Comment;

use Faker\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Factory::create();

      for ($i=0; $i < rand(5,10); $i++){
        $user = Factory::create();
        $user = new User();
        $user->name = $faker->name;
        $user->handle = $faker->word;
        $user->email = $faker->email;
        $user->password = $faker->sentence;
        $user->image = $faker->imageUrl($height=50,$width=50,'cats');
        $user->save();
      }

      for ($i=0;$i < rand(1,5); $i++){
        $tweet = new Tweet();
        $tweet->content = $faker->sentence;
        $tweet->user_id = $user->id;
        $tweet->save();

        $tweet->likes()->attach($user);
      }


        for ($i=0;$i < rand(1,5); $i++){
        $comment = new Comment();
        $comment->content = $faker->sentence;
        $comment->user_id = $user->id;
        $comment->tweet_id = $tweet->id;
        $comment->save();
      }




        // $this->call(UsersTableSeeder::class);


    }
}
