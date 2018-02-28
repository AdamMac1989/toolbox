
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "toolbox";

// Create connection
$conn = new mysqli ($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

//echo mysqli_query($conn, "SELECT * FROM `user_wood`");
$sql = "SELECT * FROM user_wood where user_id = 'user01'";
$result = $conn->query($sql);

$list = array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
//         print_r($row);
        array_push($list, $row);
    }
}

$conn->close();

echo json_encode($list);


?>


