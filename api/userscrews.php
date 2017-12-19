<?php
/**
 * Created by PhpStorm.
 * User: Adam Macphee
 * Date: 19/12/2017
 * Time: 20:29
 */


class UserScrews {
    protected $connection;

    public function connect()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=toolbox", "root", "root");
    }

    public function deleteScrew($length, $number)
    {

        $query = $this->connection->prepare(
            "DELETE FROM user_screw
            WHERE
                length = :length
            AND number = :number "
        );

        $data = [
            ':length' => $length,
            ':number' => $number
        ];

        return $query->execute($data);


    }


}






?>

