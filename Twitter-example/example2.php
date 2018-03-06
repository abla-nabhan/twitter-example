<?php
    class User{
        public $name;
        public $handle;
        public $image;
        public $dateJoined;

        public function __construct($name,$handle,$image,$dateJoined){
            $this->name = $name;
            $this->handle = $handle;
            $this->image = $image;
            $this->dateJoined = $dateJoined;
        }
    }

    class Tweet{
        public $user;
        public $time;
        public $content;
        public $comments = [];
        public $retweets = [];
        public $likes = [];

        public function __construct($user,$content,$time){
            $this->user =$user;
            $this->content =$content;
            $this->time =$time;
        }
    }

    $user1 = new User('Donald Trump','realDonaldTrump',
    'https://pbs.twimg.com/profile_images/874276197357596672/kUuht00m_bigger.jpg',
    '2018');

    $user2 = new User('Barack Obama','BarackObama',
    'https://pbs.twimg.com/profile_images/822547732376207360/5g0FC8XX_bigger.jpg','2017');


    $tweet1 = new Tweet($user1,'Billy Graham was a humble servant who prayed for so many
     - and who, with wisdom and grace, gave hope and guidance to generations of Americans.','14h');

    $tweet2 = new Tweet($user2,'45 year low on illegal border crossings this year.
                 Ice and Border Patrol Agents are doing a great job for our Country.
                 MS-13 thugs being hit hard.','3h');

    $tweets = [$tweet1,$tweet2];
    $users = [$user1,$user2];

    include('views/includes.view.php');
