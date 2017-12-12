<?php

//if (isset($_POST['submitted'])) {

include('connect.php');

$pw_id = $_POST ['pw_id'];
$length = $_POST ['length'];
$width = $_POST ['width'];
$height = $_POST ['height'];
$p_name = $_POST ['p_name'];

$sqlinsert = "INSERT INTO project_wood (pw_id, length, width, height, p_name) VALUES ('$pw_id','$length','$width','$height','$p_name')";

if (!mysqli_query($conn, $sqlinsert)) {

    die('error inserting new record');

}   // end of my nested if statement

$newprojectwood = "one record added to project_wood";
echo $newprojectwood;
//} // end of main if statement


?>