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

$sql = "SELECT * FROM  project_wood WHERE p_name ='".$p_name. "'" ;
$sqlresult = $conn ->query($sql);

$systemwood = array();

if ($sqlresult->num_rows > 0) {
    // output data of each row
    while($row = $sqlresult->fetch_assoc()) {
//         print_r($row);
        array_push($systemwood, $row);
    }
}



$sqlforuser = "SELECT * FROM  user_wood WHERE user_id ='".$user_id. "'" ;
$sqlresult = $conn ->query($sqlforuser);

$userwood = array();

if ($sqlresult->num_rows > 0) {
    // output data of each row
    while($row = $sqlresult->fetch_assoc()) {
//         print_r($row);
        array_push($userwood, $row);
    }
}


foreach ($userwood as &$uw) {
    $found = FALSE;
    for ($s = 0; $s < count($systemwood); $s++) {
       $sw = $systemwood[$s];
        $found = ($sw["length"] == $uw["length"]) && ($sw["width"] == $uw["width"])&& ($sw["height"] == $uw["height"]) ;

        if($found == true){
            unset($systemwood[$s]);
            $systemwood = array_values ($systemwood);
           break;

        }
    }

}

$conn->close();


echo json_encode ($systemwood);


?>