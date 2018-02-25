<?php
/**
 * Created by PhpStorm.
 * User: Adam Macphee
 * Date: 25/02/2018
 * Time: 11:59
 */

include_once 'toolboxitem.php';

class ProjectWood extends ToolboxItem
{

    public function getWood($p_name)
    {
        $query = $this->connection->prepare(

            "SELECT * FROM project_wood
            WHERE
                p_name = :p_name
           "
        );

        $data = [
            ':p_name' => $p_name
        ];

        $query->execute($data);
        return $query;
    }


}

?>
