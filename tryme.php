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
    <body id = "main" background= 'sitemap.jpg'>
        <?php
/* Sample code to open a plain text file */

$debug = false;

if(isset($_GET["debug"])){
    $debug = true;
}

$myFileName="data";

$fileExt=".csv";

$filename = $myFileName . $fileExt;

if ($debug) print "\n\n<p>filename is " . $filename;

$file=fopen($filename, "r");

/* the variable $file will be empty or false if the file does not open */
if($file){
    if($debug) print "<p>File Opened</p>\n";
}

/* the variable $file will be empty or false if the file does not open */
if($file){
    
    if($debug) print "<p>Begin reading data into an array.</p>\n";

    /* This reads the first row, which in our case is the column headers */
    $headers=fgetcsv($file);
    
    if($debug) {
        print "<p>Finished reading headers.</p>\n";
        print "<p>My header array<p><pre> "; print_r($headers); print "</pre></p>";
    }
    /* the while (similar to a for loop) loop keeps executing until we reach 
     * the end of the file at which point it stops. the resulting variable 
     * $records is an array with all our data.
     */
    while(!feof($file)){
        $records[]=fgetcsv($file);
    }
    
    //closes the file
    fclose($file);
    
    if($debug) {
        print "<p>Finished reading data. File closed.</p>\n";
        print "<p>My data array<p><pre> "; print_r($records); print "</pre></p>";
    }
} // ends if file was opened

/* display the data */
print "<ol>";
foreach ($records as $oneRecord) {
    if ($oneRecord[0] != "") {  //the eof would be a "" 
        print "\n\t<li>";
        //print out values
        print '<a href="' . $oneRecord[3] . '" target="_blank" ' . '>';
        print '<img src="images/' . $oneRecord[3] . '" alt="' . $oneRecord[2] . '">';
        
print "\n\t</li>";
    }
}

print "</ol>";

if ($debug)
    print "<p>End of processing.</p>\n";
?>

    </body>
</html>
