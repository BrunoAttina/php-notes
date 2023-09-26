<?php 

$config = require('config.php');
$db = new Database($config['database']);



$heading = 'Note';
$id = $_GET['id'];
$note = $db->query('select * from notes where user_id = :user and id = :id',['user' => 1,'id' => $id])->findOrFail();
//dd($notes);
/*
$id = $_GET['id'];
$query = "SELECT * FROM posts where id = :id";
dd($db->query($query, ['id' => $id])->fetch());
*/


authorize($note['user_id'] == 1);
include "views/note.view.php"; 

?>