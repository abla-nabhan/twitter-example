<?php

namespace twitterExample\models;

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
