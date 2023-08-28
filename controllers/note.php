<?php 

$config = require('config.php');
$db = new Database($config['database']);



$heading = 'Note';
$id = $_GET['id'];
$note = $db->query('select * from notes where id = :id',['id' => $id])->fetch();
//dd($notes);
/*
$id = $_GET['id'];
$query = "SELECT * FROM posts where id = :id";
dd($db->query($query, ['id' => $id])->fetch());
*/


include "views/note.view.php"; 

?>