<?php

//if (isset($_POST['submitted'])) {

include('connect.php');

$prsw_id = $_POST ['prsw_id'];
$screwlength = $_POST ['screwlength'];
$screwnumber = $_POST ['screwnumber'];
$screwp_name = $_POST ['screwp_name'];

$sqlinsert = "INSERT INTO project_screws (prsw_id, length, number, p_name) VALUES ('$prsw_id','$screwlength','$screwnumber','$screwp_name')";

if (!mysqli_query($conn, $sqlinsert)) {

    die('error inserting new record');

}   // end of my nested if statement

$newprojectscrew = "one record added to project_screws";
echo $newprojectscrew;
//} // end of main if statement


?>