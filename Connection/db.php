<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "istrike";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        // echo "Connection successfull";
    }
?>