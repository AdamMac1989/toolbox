<?php
/**
 * Created by PhpStorm.
 * User: Adam Macphee
 * Date: 05/12/2017
 * Time: 20:34
 */


include('connect.php');

$user_id = $_GET ['user_id'];
$p_name = $_GET ['p_name'];

$sql = "SELECT * FROM  project_screws WHERE p_name ='".$p_name. "'" ;
$sqlresult = $conn ->query($sql);

$systemscrews = array();

if ($sqlresult->num_rows > 0) {
    // output data of each row
    while($row = $sqlresult->fetch_assoc()) {
//         print_r($row);
        array_push($systemscrews, $row);
    }
}



$sqlforuser = "SELECT * FROM  user_screw WHERE user_id ='".$user_id. "'" ;
$sqlresult = $conn ->query($sqlforuser);

$userscrews = array();

if ($sqlresult->num_rows > 0) {
    // output data of each row
    while($row = $sqlresult->fetch_assoc()) {
//         print_r($row);
        array_push($userscrews, $row);
    }
}


foreach ($userscrews as &$uw) {
    $found = FALSE;
    for ($s = 0; $s < count($systemscrews); $s++) {
        $sw = $systemscrews[$s];
        $found = ($sw["length"] == $uw["length"]) && ($sw["number"] == $uw["number"]) ;

        if($found == true){
            unset($systemscrews[$s]);
            $systemscrews = array_values ($systemscrews);
            break;
        }

    }

}

$conn->close();


echo json_encode ($systemscrews);


?>