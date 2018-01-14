<?php
/**
 * Created by PhpStorm.
 * User: Adam Macphee
 * Date: 14/01/2018
 * Time: 11:07
 */

class ToolboxItem
{

    protected $connection;

    public function __construct()
    {
        $this->connect();
    }


    public function connect()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=toolbox", "root", "root");
    }


}