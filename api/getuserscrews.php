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

$userscrews = "SELECT * FROM user_screw";
$screwlist = $conn ->query($userscrews);

$screwresult = array();

if ($screwlist->num_rows > 0) {
    // output data of each row
    while($row = $screwlist->fetch_assoc()) {
//         print_r($row);
        array_push($screwresult, $row);
    }
}

$conn->close();

echo json_encode($screwresult);


?>

