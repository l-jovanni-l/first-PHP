<?php
function main(){

// I start with an error and then try to get out of it. 
$response = "error";

    if (!empty($_POST)) {

    // Now I get the values from js to php. You could do extra functions 
    // here like trimming striping the tags (removes <html> tags aand etc)
    // or set a max amount of chars with substr()
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $oper = $_POST['oper'];

    // The cleaning on top may leave a variable empty.
    // If it is empty stop processing. This will give you the varerror.

    if (!empty($num1) && !empty($num2) && !empty($oper)){

        switch ($oper) {
//  I am a little confused here. Why does the "add" work? 
//  Does it go into the values of the varaiable from the html file?
//  
//  This is what i think is going on now correct me if im wrong. 
//  The variable $oper is created here on the php file but we actually 
//  value from the main js file when we created the operator variable on line 32. 
//  The operator variable is then handed to the sendCalculation() where it 
//  then called op. When we hand ajax the data we pair them with keys.
//  On the right side of the " : " is the op variable bc that is from the client side right?
//  then on the left side of the colon the variable is given the new name "oper".
//  Oper must match the variable name on this php file im guessing bc i used it on line 14
//  So now that the data is here finally we have the actual value of wtv check box is checked. 
//  RIGHTTTTTT. I think I just answered my own question. 
//    
            case 'add':
                $response = "This works";
                break;
        }

    }


    }
    echo $response;

}


// This kicks off the script
main();
