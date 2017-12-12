<?php

//if (isset($_POST['submitted'])) {

include('connect.php');

$prtool_id = $_POST ['prtool_id'];
$projecttool = $_POST ['projecttool'];
$pr_name = $_POST ['pr_name'];


$sqlinsert = "INSERT INTO project_tools (prtool_id, tool, p_name) VALUES ('$prtool_id','$projecttool','$pr_name')";

if (!mysqli_query($conn, $sqlinsert)) {

    die('error inserting new record');

}   // end of my nested if statement

$newprojecttool = "one record added to project_tool";
echo $newprojecttool;
//} // end of main if statement


?>