<?php 

require 'functions.php';
//require 'router.php';
require 'database.php';

$config = require('config.php');

print_r(PDO::getAvailableDrivers());

$id = $_GET['id'];
$query = "SELECT * FROM users where id = :id";

$db = new Database($config['database']);
dd($db->query($query, ['id' => $id])->fetch());



//dd();

