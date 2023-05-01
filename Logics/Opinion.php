<link rel="stylesheet" type="text/css" href="./Styles/style.css" />
<link rel="icon" type="image/svg+xml" href="./src/image 1.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<?php

include "../Connection/db.php";

$opinion = $_POST['opinion'];
if($opinion!=null){
    $email = $_GET['email'];
    $sql = "INSERT INTO `istrike`.`user_opinion` (`email`, `opinion`) VALUES ('$email', '$opinion');";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success col-md-3'><p class='modal_title'>Record inserted successfully<p></div>";

        echo "<h3 style='color:#BE1E2E'>Your all opinions</h3>";

        $sql = "SELECT * FROM user_opinion WHERE email='$email';";
        $result = $conn->query($sql);

        echo "<table class='table table-hover' style='width:50%'>";
        echo "<tr><th>ID</th><th>Email</th><th>Opinion</th></tr>";
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td><td>".$row["opinion"]."</td></tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No results found</td></tr>";
        }
        echo "</table>";

    } else {
        echo "Error inserting record: " . $conn->error;
    }
}
?>