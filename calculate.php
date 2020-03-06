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
