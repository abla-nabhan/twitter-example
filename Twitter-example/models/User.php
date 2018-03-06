<?php

namespace twitterExample\models;

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
