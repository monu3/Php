<?php

    //starting the session 
    session_start();

    //setting the session variables
    $_SESSION['language']="EN";
    $_SESSION['username']="Ram";
    $_SESSION['userId']=123;

    //retrive the session variables 
    $language = $_SESSION['language'];
    $username = $_SESSION['username'];
    $userId = $_SESSION['userId'];

    //clear the session variables 
    session_upset();

    //destroy the session 
    session_destroy();

?>