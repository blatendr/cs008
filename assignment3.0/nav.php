<ul>
                <?php
                if ($path_parts['filename'] == "index") {
                    print '<li class="activePage">Home</li>';
                } else {
                    print '<li><a href="index.php">Home</a></li>';
                }
                if ($path_parts['filename'] == "formpage") {
                    print '<li class="activePage">Form Page</li>';
                } else {
                    print '<li><a href="formpage.php">From Page</a></li>';
                }
                
                ?>
</ul>