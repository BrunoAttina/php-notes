<?php

// Connect to our MySQK database.

class Database
{
    public $connection;
    public function __construct()
    {

        $host = 'localhost';
        $dbname = 'myapp';
        $user = 'root';
        $password = 'root';
        $dsn = "mysql:host=localhost;port=3306;dbname=$dbname;user=$user;password=$password;charset=utf8mb4";

        $this->connection = new PDO($dsn);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);  
        //return $statement->fetch(PDO::FETCH_ASSOC);  apenas o primeiro registro
    }
}