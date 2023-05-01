<?php

include "../Connection/db.php";

$userId = $_POST['user_id'];
$Password = $_POST['log_password'];

$sql = "SELECT * FROM istrike.user WHERE email='$userId';";

$result = $conn->query($sql);

if ($result->num_rows==1) {
    $row = $result->fetch_assoc();
    if(password_verify($Password, $row["password"])){
        $data = array('email'=>$userId, 'f_name'=>$row["first_name"], 'l_name'=>$row["last_name"]);
        $url = '../opinion.php?' . http_build_query($data);
        header('Location: ' . $url);
        // echo "Login successful";
        // echo "<h1>";
        // echo "Hello ",$row["first_name"]," ",$row["last_name"];
        // echo "</h1>";

      
    }else{
        echo "Invalid login credentials";
    }
} else {
    echo "Invalid login credentials";
}
?>