<?php
//+++++++++++++++++++++++++++++++++++++
// series of function to help you validateyour data. notice that each 
// function returns true or false

function verifyAlphaNum ($testString) {
    //Check for letters, numbers and dash, period, space and single quotes only.
    return (preg_match ("/^([[:alnum:]]|-|\.| |')+$/", $testString));
}

function verifyEmail ($testString) {
    
    
    return filter_var($testString, FILTER_VALIDATE_EMAIL);    
}

function verifyNumeric ($testString) {
    //check for numbers and period
    return (is_numeric ($testString));
}

function verifyPhone ($testString) {
    //check for usa phone number http://www.php.net/manual/en/function.preg-match.php
    $regex = '/^(?:1(?:[. -])?)?(?:\((?=\d{3}\)))?([2-9]\d{2})(?:(?<=\(\d{3})\))? ?(?:(?<=\d{3})[.-])?([2-9]\d{2})[. -]?(\d{4})(?: (?i:ext)\.? ?(\d{1,5}))?$/';

    return (preg_match($regex, $testString));   
}

?>