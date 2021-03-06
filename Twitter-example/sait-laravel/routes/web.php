<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Faker\Factory;
use App\Models\Tweet;
use App\Models\Comment;
use App\User;

Route::get('/about', function(){
    return view('about');
});


Route::get('/', function () {
    $faker = Factory::create();

    // $user1 = new User();
    // $user1->image = $faker->imageUrl($width = 100, $height = 100) ;
    // $user1->name = $faker->name;
    // $user1->handle = $faker->userName;
    // $user1->dateJoined= $faker->date($format = 'Y-m-d', $max = 'now');

    $tweets = Tweet::limit(10)->get();
    $users = User::all();
    $comments = Comment::limit(10)->get();

    foreach($tweets as $tweet){
      $tweet->user = $users[0];
    };
    //
    // foreach($comments as $comment){
    //   $comment->tweet = $tweet[0];
    // };


    // $tweet1 = new Tweet();
    // $tweet1->user =$user1;
    // $tweet1->image=$user1;
    // $tweet1->content = $faker->text(280);
    // $tweet1->comments = $faker->biasedNumberBetween($min = 10, $max = 20, $function = 'sqrt');
    // $tweet1->retweets = $faker->biasedNumberBetween($min = 10, $max = 20, $function = 'sqrt');
    // $tweet1->likes = $faker->biasedNumberBetween($min = 10, $max = 20, $function = 'sqrt');


    $data = [
        'users'=>$users,
        'tweets'=>$tweets,
        'comments'=>$comments
    ];

    return view('welcome',$data);
});
