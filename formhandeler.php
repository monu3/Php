<?php
    $first_name=validate($_POST['fName']);
    $last_name=validate($_POST['lName']);
    $age=validate($_POST['age']);
    $roll=validate($_POST['roll']);


    function validate($val) {
        $sanitizedVal = htmlspecialchars($val);
        $sanitizedVal = trim($sanitizedVal);
        $sanitizedVal = stripslashes($sanitizedVal);
        return $sanitizedVal;
    }


    // //for name validation 
    // function sanitizeName($val){
    //     $sanitizedVal = htmlspecialchars($val);
    //     $sanitizedVal = trim($val);
    //     return $sanitizedVal;
    // }

    // /// for number validation 
    // function sanitizeNumber($val){
    //     $sanitizedVal = number_format($val);
    //     return $sanitizedVal;
    // }

    // // for slash validation 
    // function sanitizeSlash($val){
    //     $sanitizedVal = stripslashes($val);
    //     return $sanitizedVal;
    // }

    //php Mysql connection 
    $connection = new mysqli('localhost',"mysql","iloveu");
    if($connection->connect_error){
        
        
    }

    echo $first_name;
    echo $last_name;
    echo $age;
    echo $roll;

?>