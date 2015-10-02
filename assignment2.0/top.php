<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Season Pictures </title>
        <meta charset="utf-8">
        <meta name="author" content="Brad Latendresse">
        <meta name="description" content="A connected series of webpages with pictures of each season">

        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--[if lt IE 9]>
                <script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="style.css" type="text/css" media="screen">

        <?php
// parse the url into htmlentites to remove any suspicous vales that someone
// may try to pass in. htmlentites helps avoid security issues.

        $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");

// break the url up into an array, then pull out just the filename
        $path_parts = pathinfo($phpSelf);
        ?>	

    </head>