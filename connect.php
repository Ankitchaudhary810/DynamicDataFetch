<?php

    // database connectivity code 

    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $database =  'awp';

    // connecting to the database 

    $con = mysqli_connect($server, $user, $pass, $database);
    if($con){
        // echo "conncection created";
    } 
    else{
        echo 'not created';
    }
   
?>