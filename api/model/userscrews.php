<?php
/**
 * Created by PhpStorm.
 * User: Adam Macphee
 * Date: 19/12/2017
 * Time: 20:29
 */

include_once 'toolboxitem.php';

class UserScrews extends ToolboxItem
{



    public function deleteScrew($length, $number)
    {

        $query = $this->connection->prepare(
            "DELETE FROM user_screw
            WHERE
                length = :length
            AND number = :number 
            limit 1"
        );

        $data = [
            ':length' => $length,
            ':number' => $number
        ];

        $query->execute($data);
        return $query;


    }


}






?>

