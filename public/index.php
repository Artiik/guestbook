<?php

require_once '../vendor/autoload.php';

//echo 'Hello';
//
//$arr = [1, 'apple', 2, true, 'foo', 'bar'];
//
//var_dump($arr);
//
//dump($arr);

$file = '../storage/database.db';

if (is_writable('../storage/database.local.db')) {
    $file = '../storage/database.local.db';
}

$database = new medoo([
    'database_type' => 'sqlite',
    'database_file' => $file
]);

$comment = new SitePoint\Comment($database);
$comment->setEmail('bruno@skvork.me')
        ->setName('Bruno Skvork')
        ->setComment('It works! Now it simply works so far)')
        ->setComment('Hooray! Lets go and listen to music)')
        ->save();

dump($database->error());

//dump($database);

?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <form action="" method="post">
            <label for="">Name: <input type="text" name="name"></label>
            <label for="">Email: <input type="text" name="email"></label>
            <label for="">Comment: <textarea name="comment" id="" cols="30" rows="10"></textarea></label>

            <input type="submit" value="Save">
        </form>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
