<?php
/**
 * Created by PhpStorm.
 * User: Adam Macphee
 * Date: 25/02/2018
 * Time: 12:11
 */

include_once 'toolboxitem.php';

class UserWood extends ToolboxItem
{


    public function deleteWood($length, $width, $height)
    {

        $query = $this->connection->prepare(
            "DELETE FROM user_wood
            WHERE
                length = :length
              AND width = :width
             AND  height = :height 
            limit 1"
        );

        $data = [
            ':length' => $length,
            ':width' => $width,
            ':height' => $height
        ];

        $query->execute($data);
        return $query;


    }


}

?>