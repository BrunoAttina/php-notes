<?php 

require 'functions.php';
//require 'router.php';

print_r(PDO::getAvailableDrivers());

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

    public function query()
    {
        $statement = $this->connection->prepare("SELECT * FROM posts");
        $statement->execute();

        return $statement->fetchAll();  
    }
}

$db = new Database();
dd( $db->query());
//dd();


/*
class Person {
    public $name;
    public $age;

    public function breathe() {
        echo "Breathing";
    }
}

$person = new Person();

$person->name = 'John Doe';
$person->age = 25;
$person->breathe();
dd($person);

*/