<?php

//if (isset($_POST['submitted'])) {

include('connect.php');

$pinst_name = $_POST ['pinst_name'];
$instructions = $_POST ['instructions'];


$sqlinsert = "INSERT INTO project_instructions (p_name, instructions) VALUES ('$pinst_name','$instructions')";

if (!mysqli_query($conn, $sqlinsert)) {

    die('error inserting new record');

}   // end of my nested if statement

$newprojectinst = "one record added to project_instructions";
echo $newprojectinst;
//} // end of main if statement


?>