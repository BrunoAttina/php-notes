<?php 

require 'functions.php';
//require 'router.php';
require 'database.php';

$config = require('config.php');

print_r(PDO::getAvailableDrivers());


$db = new Database($config['database']);
dd( $db->query("SELECT * FROM posts")->fetch() );



//dd();

