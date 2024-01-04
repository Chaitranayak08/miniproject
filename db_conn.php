<?php
    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_conn = "test_db";
    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    if(!$conn) {
        echo "Connection Failed";
    }