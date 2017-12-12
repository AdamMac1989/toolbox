<?php


include ('connect.php');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$sql = "SELECT * FROM project_instructions";
$result = $conn ->query($sql);

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
