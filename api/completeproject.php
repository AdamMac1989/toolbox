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

//todo project userwood delete


?>