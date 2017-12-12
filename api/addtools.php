<?php

//if (isset($_POST['submitted'])) {

    include('connect.php');

    $tool_id = $_POST ['tl_id'];
    $tool = $_POST ['tl'];
    $us_id = $_POST ['u_id'];

    $sqlinsert = "INSERT INTO user_tools (usertool_id, tool, user_id) VALUES ('$tool_id', '$tool','$us_id')";

    if (!mysqli_query($conn, $sqlinsert)) {

        die('error inserting new record');

    }   // end of my nested if statement

    $newrcrdtool = "one record added to user_tools";
    echo $newrcrdtool;


//} // end of main if statement

?>

