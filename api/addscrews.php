<?php

//if (isset($_POST['submitted'])) {

    include('connect.php');

    $screw_id = $_POST ['scrw_id'];
    $length = $_POST ['lngth'];
    $number = $_POST ['nmber'];
    $user_id = $_POST ['usr_id'];

    $sqlinsert = "INSERT INTO user_screw (screw_id, length, number, user_id) VALUES ('$screw_id', '$length','$number','$user_id')";

    if (!mysqli_query($conn, $sqlinsert)) {

        die('error inserting new record');

    }   // end of my nested if statement

    $newrcrdscrew = "one record added to user_screw";
    echo $newrcrdscrew;
//} // end of main if statement


?>

