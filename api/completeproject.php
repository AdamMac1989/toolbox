<?php
/**
 * Created by PhpStorm.
 * User: Adam Macphee
 * Date: 19/12/2017
 * Time: 20:45
 */
require_once 'model/userscrews.php';

require_once 'model/projectscrews.php';

//if (!isset($_GET['id']) || empty($_GET['id'])) {
//    echo "You did not pass in an ID.";
//    exit;
//}

$projectscrews = new ProjectScrews();
$screws = $projectscrews->getScrew($_GET['p_name']);

$userscrews = new UserScrews();


if ($screws === false) {
    echo "Topic not found!";
    exit;
}

foreach ($screws as $screw) {
    print_r($screw);

    $userscrews->deleteScrew($screw ['length'], $screw['number']);
}

//for wood see below

require_once 'model/userwood.php';

require_once 'model/projectwood.php';


$projectwood = new ProjectWood();
$woods = $projectwood->getWood($_GET['p_name']);

$userwood = new UserWood();


if ($woods === false) {
    echo "Topic not found!";
    exit;
}

foreach ($woods as $wood) {
    print_r($wood);

    $userwood->deleteWood($wood ['length'], $wood['width'], $wood['height']);
}

//no change made below.



header("Location: ../view/Customeraccountpage.htm");
die();


//todo project userwood delete


?>