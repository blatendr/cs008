<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <nav
            <ol>
                <?php
                if ($path_parts['filename'] == "index") {
                    print '<li class="activePage">Home</li>';
                } else {
                    print '<li><a href="index.php">Home</a></li>';
                }
                if ($path_parts['filename'] == "page1") {
                    print '<li class="activePage">page 1</li>';
                } else {
                    print '<li><a href="page1.php">page 1</a></li>';
                }
                if ($path_parts['filename'] == "page2") {
                    print '<li class="activePage">page 2</li>';
                } else {
                    print '<li><a href="page2.php">page2</a></li>';
                }
                if ($path_parts['filename'] == "page3") {
                    print '<li class="activePage">page 3</li>';
                } else {
                    print '<li><a href="page3.php">page 3</a></li>';
                }
                ?>
            </ol>
        </nav> 
       <?php
        // put your code here
        ?>
    </body>
</html>
