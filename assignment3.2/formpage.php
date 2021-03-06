 <?php
 include "top.php";

//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%555
//
//SECTION: 1 initilaize vars
//
// SECTION: 1a.
// variables for the classroom purposes to help find errors.

$debug = false;

if (isset($_GET["debug"])){
    $debug =true;
}

if ($debug){
    print"<DEBUG MODE IS ON</p>";
}
/////////////////////////////////////
//
// SECTION: 1b Security
//
// define security variable to be used in SECTIN 2a
$yourURL = $domain . $phpSelf;


//%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// SECTION: 1c form variables
//
//Initialize vars one for each form element
//in the order they appear on the form

$email= "blatendr@uvm.edu";



//
// SECTION: 1d form error flags
//
//Initialize error flags one for each form element we validate
//in the order they appear in section 1c

$emailERROR = false;

//%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// SECTION: 1e misc variables
// 
//create array to hold error messages filled (if any) in 2d displayed in 3c
$errorMsg = array();

//aray used to hold form values that will be writeen to a csv file
$dataRecord = array();

$mailed=false;
//-----------------------------------------
//
// SECTION: 2 Process for when the form is submitted
//
if (isset($_POST["btnSubmit"])){

    //---------------------------------
    //
    // SECTION: 2a Security
    // 
   if (!securityCheck(true)){
       $msg = "<p>Sorry you cannot access this page. ";
        $msg.= "Security breach detected and reported</p>";
        die($msg);
   }   
 
    //---------------------------
    //
    // SECTION: 2b Sanitize (clean) data 
    // remove any potential JavaScript or html code from users input on the
    // form. note it is best to follow the smae order as declated in section 1c

    
    


    $email = filter_var($_POST["txtEmail"],FILTER_SANITIZE_EMAIL);
    $dataRecord[]= $email;


    //------------------------
    //
    // SECTION: 2c Validation
    //
     // Validation section. Check each value for possible errors, empty or
    // not what we expect. You will need an IF block for each element you will
    // check (see above section 1c and 1d). The if blocks should also be in the
    // order that the elements appear on your form so that the error messages
    // will be in the order they appear. errorMsg will be displayed on the form
    // see section 3b. The error flag ($emailERROR) will be used in section 3c.

    
        
        
    
        
        
    

    if ($email == "") {
        $errorMsg[] = "Please enter your email address";
        $emailERROR = true;
    } elseif (!verifyEmail($email)) {
        $errorMsg[] = "Your email address appears to be incorrect.";
        $emailERROR = true;
    }
    

    //-----------------------------
    //
    // SECTION: 2d Process Form - Passed Validation
    //
    // Process for when the form passes validation (the errorMsg array is empty)
    //
        if (!$errorMsg) {
        if ($debug)
            print "<p>Form is valid</p>";
    
        //------------------------------
        //
        // SECTION: 2e Save Data
        //
        //this block saves the data to a csv file 

        $fileExt = ".csv";

        $myFileName = "data/registration";

        $filename = $myFileName . $fileExt;

        if ($debug)
            print "\n\n<p>filename is " . $filename;

        //open file for append
        $file = fopen($filename, 'a');

        //write the forms info
        fputcsv($file, $dataRecord);

        //close the file
        fclose($file);

        //-----------------------------
        //
        // SECTION: 2f Create message
        //
        // build a message to display on the screen in section 31 and to mail
        // to the person filling out the form (section 2g)

        $message = '<h2>Thank you for your time!.</h2>';

        foreach ($_POST as $key => $value) {

            $message .= "<p>";

            $camelCase = preg_split('/(?=[A-Z])/', substr($key, 3));

            foreach ($camelCase as $one) {
                $message .= $one . " ";
            }
            $message .= " = " . htmlentities($value, ENT_QUOTES, "UTF-8") . "</p>";
        }


        //-------------------------
        //
        // SECTION: 2g Mail to user
        //
        //Process for mailing a message which containsthe forms data 
        // the message was built in section 2f
        $to = $email; //the person who filled out t form
        $cc = "";
        $bcc = "";
        $from = "<noreply@blatendr.w3.uvm.edu";

        //subject of mail should make sense to your form
        $todaysDate = strftime("%x");
        $subject = "Confirmation Email!" . $todaysDate;
        
        $mailed = sendMail($to, $cc, $bcc, $from, $subject, $message);
        
    }//end form valid
        
}  //ends if form was submitted      
    
//---------------------------------
//
// SECTION 3 Display Form
//
 ?>

 <article id="main">

    <?php
    //----------------------
    //
    // SECTION 3a.
    //
    
    // 
    // 
    // if its the first time coming to the form of there are errors we are going 
    // to display the form.
     if (isset($_POST["btnSubmit"]) AND empty($errorMsg)) { // closing of if marked with: end body submit
        print "<h1>Your Request has ";
    // 
    if (!mailed) {
        print "not";
    }
        
    print "been processed</h1>";      
        
    print "<p>A copy of this message has";
    if (!$mailed) {    
        print "not";
    }
    print "been sent </p>";   
    print "<p>To: " . $email . "</p>";        
    print "<p>Mail Message:</p>";
        
        print $message;
    } else {


        //-------------------
        //
        // SECTION 3b Error Messages
        //
        //display any error messages before we print out the form 

         if ($errorMsg) {
            print '<div id="errors">';
            print "<ol>\n";
            foreach ($errorMsg as $err) {
                print "<li>" . $err . "</li>\n";
            }
            print "</ol>\n";
            print '</div>';
        }

        //----------------------
        //
        // SECTION 3c html Form
        //
        /* Display the HTML form. note that the action is to this same page. $phpSelf
          is defined in top.php
          

          

          
          

          

          

          
          

       */  
    ?>

       <form action="<?php print $phpSelf; ?>"
              method="post"
              id="frmRegister">

            <fieldset class="wrapper">
                <legend>Register Today</legend>
                <p>You information will greatly help us with our research.</p>

                <fieldset class="wrapperTwo">
                    <legend>Please complete the following form</legend>

                    <fieldset class="contact">
                        <legend>Contact Information</legend>
                        
                        
                        
                        
                                                                     
                        
                        
                        
                        
                        <label for="txtEmail" class="required">Email
                            <input type="text" id="txtEmail" name="txtEmail"
                                   value="<?php print $email; ?>"
                                   tabindex="120" maxlength="45" placeholder="Enter a valid email address"
                                   <?php if ($emailERROR) print 'class="mistake"'; ?>
                                   onfocus="this.select()" 
                                   autofocus>
                        </label>
                    </fieldset> <!-- ends contact -->
                    
                </fieldset> <!-- ends wrapper Two -->
                
                <fieldset class="buttons">
                    <legend></legend>
                    <input type="submit" id="btnSubmit" name="btnSubmit" value="Register" tabindex="900" class="button">
                </fieldset> <!-- ends buttons -->
                
            </fieldset> <!-- Ends Wrapper -->
        </form>

    <?php
    } // end body submit
    ?>

 </article>

<?php include "footer.php"; ?>
                           
</body>
</html>
                