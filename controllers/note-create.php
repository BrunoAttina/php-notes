<?php

$config = require('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_POST['body'];
    $db->query("INSERT INTO notes(body, user_id) VALUES(:body, :user_id)", [
        'body' => $_POST['body'],
        'user_id' => 1
    ]);
}

$heading = 'Create Note';
require 'views/note-create.view.php';