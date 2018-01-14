<?php
/**
 * Created by PhpStorm.
 * User: Adam Macphee
 * Date: 14/01/2018
 * Time: 11:01
 */

include_once 'toolboxitem.php';

class ProjectScrews extends ToolboxItem
{


    public function getScrew($p_name)
    {
        $query = $this->connection->prepare(

            "SELECT * FROM project_screws
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