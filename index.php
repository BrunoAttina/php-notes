<?php 

require 'functions.php';
require 'router.php';


// Connect to our MySQK database.

$dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";

$pdo = new PDO($dsn);

$pdo->prepare("SELECT * FROM posts");


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