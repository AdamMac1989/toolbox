
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

$usertools = "SELECT * FROM user_tools";
$toollist = $conn ->query($usertools);

$toolresult = array();

if ($toollist->num_rows > 0) {
    // output data of each row
    while($row = $toollist->fetch_assoc()) {
//         print_r($row);
        array_push($toolresult, $row);
    }
}

$conn->close();

echo json_encode($toolresult);


?>


