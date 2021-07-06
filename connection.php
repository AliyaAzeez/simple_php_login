<?php

    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "sample_login_db";

    if(!$con = mysqli_connect($db_host,$db_user,$db_password,$db_name)){
        die("failed to connect");
    }