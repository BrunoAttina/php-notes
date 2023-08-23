<?php 

require 'functions.php';
//require 'router.php';
require 'database.php';

print_r(PDO::getAvailableDrivers());


$db = new Database();
dd( $db->query("SELECT * FROM posts"));
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