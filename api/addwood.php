<?php

//if (isset($_POST['submitted'])) {

    include('connect.php');

    $wdid = $_POST ['wdid'];
    $len = $_POST ['len'];
    $wid = $_POST ['wid'];
    $hei = $_POST ['hei'];
    $usrid = $_POST ['usrid'];

    $sqlinsert = "INSERT INTO user_wood (wood_id, length, width, height, user_id) VALUES ('$wdid', '$len','$wid','$hei','$usrid')";

    if (!mysqli_query($conn, $sqlinsert)) {

        die('error inserting new record');

    }   // end of my nested if statement

    $newrcrd = "one record added to user_wood";
echo $newrcrd;

//} // end of main if statement

?>

