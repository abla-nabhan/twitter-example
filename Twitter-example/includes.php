<?php

require_once 'vendor/autoload.php';
// require_once 'users.view.php';
// require_once 'tweets.view.php';

use twitterExample\models\User;
use twitterExample\models\Tweet;
use Faker\Factory;

$faker= Factory::create();

    $user1 = new User($faker->name,'realDonaldTrump',
    $faker->imageUrl($width = 100, $height=100),
    '2018');

    $user2 = new User($faker->name,'BarackObama',
    $faker->imageUrl($width = 100, $height=100),'2017');

// var_dump($user1);die;

    $tweet1 = new Tweet($user1,$faker->realtext,'14h');

    $tweet2 = new Tweet($user2,$faker->realtext,'3h');

    $tweets = [$tweet1,$tweet2];
    $users = [$user1,$user2];

include_once('views/body.view.php');
