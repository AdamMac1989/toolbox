<?php
// this will trigger when submit button click
if (isset($_POST['sub'])) {

    $db = new mysqli("localhost", "root", "root", "toolbox");

    // create query
    $query = "SELECT * FROM user WHERE name='" . $_POST['uname'] . "' AND pass='" . $_POST['pass'] . "'";

    // execute query
    $sql = $db->query($query);
    // num_rows will count the affected rows base on your sql query. so $n will return a number base on your query
    $n = $sql->num_rows;

    // if $n is > 0 it mean their is an existing record that match base on your query above
    if ($n > 0) {

        echo("<script>
<!--
location.replace(\"../view/Customeraccountpage.htm\"); //this is not correct but will do for proof of concept!!
-->
</script>");

//        header("Location :/view/Customeraccountpage.htm" );

//        echo "Successfully Logged in, click <a href=../view/Customeraccountpage.htm> here </a> to go to your homepage";
    } else {

        echo "Incorrect username or password, try again or click <a href=../view/accountregistration.htm> here </a> to register";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


</head>
<body>
<!-- your html form -->
<form method="POST">
    username:
    <input type="text" name="uname">
    <br/>
    Password:
    <input type="password" name="pass">
    <br/>
    <input type="submit" name="sub">
</form>


</body>
</html>