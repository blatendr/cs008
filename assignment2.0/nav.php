
            <ul>
                <?php
                if ($path_parts['filename'] == "index") {
                    print '<li class="activePage">Home</li>';
                } else {
                    print '<li><a href="index.php">Home</a></li>';
                }
                if ($path_parts['filename'] == "Summer") {
                    print '<li class="activePage">Summer</li>';
                } else {
                    print '<li><a href="Summer.php">Summer</a></li>';
                }
                if ($path_parts['filename'] == "Spring") {
                    print '<li class="activePage">Spring</li>';
                } else {
                    print '<li><a href="Spring.php">Spring</a></li>';
                }
                if ($path_parts['filename'] == "Fall") {
                    print '<li class="activePage">Fall</li>';
                } else {
                    print '<li><a href="Fall.php">Fall</a></li>';
                }
                if ($path_parts['filename'] == "winter") {
                    print '<li class="activePage">winter</li>';
                } else {
                    print '<li><a href="winter.php">winter</a></li>';
                }
                ?>
            </ul>
