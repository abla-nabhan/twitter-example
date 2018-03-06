<!DOCTYPE html>
<html>
    <head>
   <link rel="stylesheet" href="./example1-styles.css">
        <meta charset="utf-8">
    </head>
    <body>
        <ul class="users">
            <h2>You may also like</h2>
            <?php foreach($users as $user): ?>
                <li><img class= "picture" src="<?php echo $user->image ?>">
                    <strong><?php echo $user->name ?></strong><br/>
                    @<?php echo $user->handle ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <ul class="tweets">
            <h1>Tweets</h1>
            <?php foreach($tweets as $tweet): ?>
                <li>
                        <img class="picture" src="<?php echo $tweet->user->image ?>"><br/>
                        <strong><?php echo $tweet->user->name?></strong>
                        <?php echo $tweet->content ?><br/>
                        <?php echo $tweet->time ?>
                        <?php echo count($tweet->comments) ?>
                        <?php echo count($tweet->retweets) ?>
                        <?php echo count($tweet->likes) ?> <br/>
                </li>
                <hr>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
