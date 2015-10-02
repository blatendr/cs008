<?php
/* php code can go anywhere but we will be starting almost all our documents
 * with php code There is no code here at the moment */
?>
<!DOCTYPE HTML>
<html lang="en">

    <head>
         
        <meta charset="utf-8">
        <meta name ="author" content="Brad Latendresse">
        <meta name="robots" content="nofollow" />
        <meta name ="description" content="Today it seems impossible to have a small carbon footprint, here are some tips to help!">
        
        <link rel="stylesheet"
              href="style.css"
              type="text/css"
              media="screen">
        
        <title>About Me</title>
    </head>

    <body>
    <ul id = "map">
        <li class="activePage">Home</li>
        <li><a href="energy.php">energy</a></li>
        <li><a href="heat.php">heat</a></li>
        <li><a href="page3.php">Transportation</a></li>
    </ul>
        <h1>Why should I start thinking eco-friendly? SDGDFGSDFDFGGG</h1>

        <p id = "first">In todays day and age we are constantly pumping toxins into the atmosphere, cutting down our
            beautiful forests and causing irreversible damage. The amount of carbon dioxide and other harmful hydrocarbons 
        in our atmosphere is measure by parts per million (ppm). Environmental scientists predict that we will reach a tipping point 
        around 400 ppm that would take around a hundreds of years of no pollution to reverse. The scary part is that we have reached this 
        value and are on course to have it keep rising. Bellow is the ppm of toxins over the past  few years and if we band together
        as a species we can overcome this dilemma and turn back global warming. The links in this web site provide tips and tricks you 
        can do yourself to help reduce your carbon footprint by improving your heating, electricity and transportation.</p>
        
        <figure id = "me">
            <figcaption>Me at Sugarbush enjoying the snow.</figcaption>
            <img src="me.jpg" alt="Picture" style="width:720px;height:720px">
               
        </figure>   
            <?php
        $ppmDates = array(
          array(2014, "398.55"),
          array(2013, "236.48"),
          array(2012, "393.82"),
          array(2011, "391.63"),
          array(2010, "389.85"),
          array(2009, "387.37"),
          array(2008, "385.59"),
          array(2007, "383.76"),
          array(1997, "363.71"),
          array(1992, "356.38"),
          array(1987, "349.16"),
          array(1959, "315.97"),    
        );
        
        foreach ($ppmDates as $row) {
    print "<p>" . $row[0] . "- the ppm were -" . $row[1] . "</p>\n";
}
        
            
            ?>

    </body>
</html>