<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "pubblicreviews_db";
    $connection = "";


    $connection = new mysqli(
        $db_server,
        $db_user,
        $db_password,
        $db_name
    );
    if (mysqli_connect_errno()) {
        echo "You are NOT connected";
        exit();
    }
 
    

?>