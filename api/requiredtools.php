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

$sql = "SELECT * FROM  project_tools WHERE p_name ='".$p_name. "'" ;
$sqlresult = $conn ->query($sql);

$systemtools = array();

if ($sqlresult->num_rows > 0) {
    // output data of each row
    while($row = $sqlresult->fetch_assoc()) {
//         print_r($row);
        array_push($systemtools, $row);
    }
}



$sqlforuser = "SELECT * FROM  user_tools WHERE user_id ='".$user_id. "'" ;
$sqlresult = $conn ->query($sqlforuser);

$usertools = array();

if ($sqlresult->num_rows > 0) {
    // output data of each row
    while($row = $sqlresult->fetch_assoc()) {
//         print_r($row);
        array_push($usertools, $row);
    }
}


foreach ($usertools as &$uw) {
    $found = FALSE;
    for ($s = 0; $s < count($systemtools); $s++) {
        $sw = $systemtools[$s];
        $found = ($sw["tool"] == $uw["Tool"]) ;

        if($found == true){
            unset($systemtools[$s]);
            $systemtools = array_values ($systemtools);
            break;
        }

    }

}

$conn->close();


echo json_encode ($systemtools);


?>