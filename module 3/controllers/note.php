<?php

$config = require 'config.php';
$db = new Database($config['database']);


$title = "Notes";
$currentUserId = 1;

$query = "select * from notes where id = :id";

$note = $db->query($query, ['id' => $_GET['id']])->findOrFail();

if (!$note) {
    abort();
}

authorize($note['user_id'] === $currentUserId);



require "views/note.view.php";
