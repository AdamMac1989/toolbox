<?php

//if (isset($_POST['submitted'])) {

    include('connect.php');


    $pass = $_POST ['pass'];
    $name = $_POST ['name'];
    $phone_number = $_POST ['phone_number'];
    $email = $_POST ['email'];

    $sqlinsert = "INSERT INTO user (pass, name, phone_number, email) VALUES ( '$pass','$name','$phone_number','$email')";

    if (!mysqli_query($conn, $sqlinsert)) {

        die('error inserting new record');

    }   // end of my nested if statement

//$newuser = "New User Added";

    $newuser = ("<script>
<!--
location.replace(\"../api/login.php\"); //this is not correct but will do for proof of concept!!
-->
</script>");
    echo $newuser;
//} // end of main if statement
?>

