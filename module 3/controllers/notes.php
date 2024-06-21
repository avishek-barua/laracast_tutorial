<?php

$config = require 'config.php';
$db = new Database($config['database']);


$title = "My Notes";

$query = "select * from notes ";

$notes = $db->query($query)->fetchAll();

require "views/notes.view.php";
