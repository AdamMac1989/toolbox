<?php



function  fetch($sql)
{
    include ('../connect.php');

    $sqlresult = $conn->query($sql);

    $systemwood = array();

    if ($sqlresult->num_rows > 0) {
        // output data of each row
        while ($row = $sqlresult->fetch_assoc()) {
//         print_r($row);
            array_push($systemwood, $row);
        }
    }

    $conn->close();

    echo json_encode($systemwood);

}
?>