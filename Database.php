<?php

class Database
{
    public $connection;

    public function __construct()
    {
        $dns = "mysql:host=localhost;port=3306;user=root;password=sexy;dbname=myass;charset=utf8mb4";
        $this->connection = new PDO($dns);
    }
    public function query($query)
    {



        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}
