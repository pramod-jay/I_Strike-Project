<?php

include "../Connection/db.php";

$email = $_POST['email'];
$first_name = $_POST['f_name'];
$last_name = $_POST['last_name'];
$password = $_POST['reg_password'];
$hash = password_hash($password, PASSWORD_DEFAULT);



if($email!=null){
    $sql = "INSERT INTO `istrike`.`user` (`email`, `first_name`, `last_name`, `password`) VALUES ('$email', '$first_name', '$last_name','$hash');";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error inserting record: " . $conn->error;
    }
}

?>