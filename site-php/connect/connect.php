<?php
    $host = "localhost";
    $user = "billiejeong";
    $pass = "j65023genie!";
    $db = "billiejeong";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf-8");

    if( mysqli_connect_errno() ){
        echo "Database Connect False";
    } else {
        //echo "Database Connect True";
    }
?>