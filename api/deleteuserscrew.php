<?php
/**
 * Created by PhpStorm.
 * User: Adam Macphee
 * Date: 19/12/2017
 * Time: 20:45
 */
require 'model/userscrews.php';

//if (!isset($_GET['id']) || empty($_GET['id'])) {
//    echo "You did not pass in an ID.";
//    exit;
//}

$data = new UserScrews();
$data ->connect();
$topic = $data->deleteScrew($_GET['length'], $_GET['number']);

//if ($topic === false) {
//    echo "Topic not found!";
//    exit;
//}

if ($topic) {
//    header("Location: ../view/Customeraccountpage.htm");
    exit;
} else {
    echo "An error occurred";
}




?>