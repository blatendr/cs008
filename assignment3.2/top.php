<!DOCTYPE html>
<html lang="en">
<head>
<title>Gary Busey Fan Club</title>
<meta charset="utf-8">
<meta name="Brad Latendresse" content="A place all Gary Busey fans can congregate">
<meta name="a form an index page to get on a mailing list" content="a form an index page to get on a mailing list">

<meta name="viewport" content="width=device-width, initial-scale=1">

<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
<![endif]-->

<link rel="stylesheet" href="style.css" type="text/css" media="screen">

<?php
// %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// PATH SETUP
//
//  $domain = "https://www.uvm.edu" or http://www.uvm.edu;
 $domain = "http://";
if (isset($_SERVER['HTTPS'])) {
    if ($_SERVER['HTTPS']) {
        $domain = "https://";
    }
}

$server = htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, "UTF-8");

$domain .= $server;

$phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");

$path_parts = pathinfo($phpSelf);

if ($debug){
    print "<p>Domain" . $domain;
    print "<p>php Self". $phpSelf;
    print "<p>Path Parts<pre>";
    print_r($path_parts);
    print "</pre>";
}

// %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// inlcude all libraries
//

require_once('lib/security.php');

if ($path_parts['filename'] == "formpage") {
    include "lib/validation-functions.php";
    include "lib/mail-message.php";    
}
?>	

</head>
<!-- ################ body section ######################### -->

<?php

print '<body id="' . $path_parts['filename'] . '">';

include "header.php";
include "nav.php";

?>