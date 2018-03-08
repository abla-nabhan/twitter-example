<link rel="stylesheet" href="/css/app.css">
<!-- <script type="text/javascript" src="/js/app.js"></script> -->

</script>
<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

<head>
<div class="navigation">
    <ul>
        <div class="left-nav">
            <li><i class="fab fa-twitter fa-lg"></i> Home</li>
            <li><i class="fas fa-bolt"></i></i> Moments</li>
        </div>

        <div class="right-nav">
            <li><button>search twitter <i class="fas fa-search"></i></button></li>
            <li>Have an account? <strong>Log in</strong><i class="fas fa-caret-down"></i> </li>
        </div>
    </ul>
</div>

<div class="hero-image"></div>

</head>
<div class="profile-stats">
    <ul>
        <li>Tweets <br/> 15.5k</li>
        <li>Following  <br/>624k</li>
        <li>Followers  <br/>100M</li>
        <li>Likes  <br/>11</li>
        <li>Lists  <br/>3</li>

    </ul>
</div>
<body>

<div class="main-body">
    <div class="profile-column">
        <ul>
          <?php foreach($users as $user):?>
            <strong><li><?php echo $user->name ?></li></strong>
            <li>@<?php echo $user->handle ?></li>
          <?php endforeach ?>

        </ul>

    </div>

    <div class="twitter-feed">
        <div class="twitter-feed-links">
            <li>Tweets</li>
            <a href="#"><li>Tweets & replies</li></a>
            <a href="#"><li>Media</li></a>
        </div>
        <div class="twitter-feed-tweets">
          <ul>
        <?php foreach($tweets as $tweet):?>
                <li>
                    <img src="<?php echo $user->image ?>"></img>
                </li>

                <li>
                    <?php echo $tweet->content ?>
                </li>
                <li>
                  this tweet has  <?php echo count($tweet->comments) ?> comments
                  this tweet has <?php echo count($tweet->likes) ?> likes
                  this tweet was liked by <?php echo count($user->likes) ?> users
                </li>
        <?php endforeach ?>
        </ul>

        </div>

    </div>



    <div class="user-feed">
        <div class="new-user">
            <h2>New to Twitter?</h2>
            <p>Sign up now to get your own personalized timeline!</p>
            <button>Sign up</button>
        </div>
        <div class="user-feed-title">
        <h2>You may also like</h2><br/>
        </div>

        <ul>
        <?php foreach($users as $user):?>
                <li>
                    <img src="<?php echo $user->image ?>"></img>
                    <?php echo $user->name ?><br>
                    @<?php echo $user->handle ?>
                    <?php echo $user->dateJoined ?>
                </li>
        <?php endforeach ?>
      </ul>

    </div>
</div>
</body>
