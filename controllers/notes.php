<?php 

$config = require('config.php');
$db = new Database($config['database']);



$heading = 'Notes';

$notes = $db->query('select * from notes where user_id = 1')->get();
//dd($notes);
/*
$id = $_GET['id'];
$query = "SELECT * FROM posts where id = :id";
dd($db->query($query, ['id' => $id])->fetch());
*/


include "views/notes.view.php"; 

?>