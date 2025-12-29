<?php

require 'functions.php';

//require 'router.php';

require 'Database.php';

$config = require 'config.php';
$db = new Database($config['database']);

$id = $_GET['id'] ?? null;
// prepared statement with parameter binding
// never inline user data directly into query string
$query = "select * from posts where id = :id";

$posts = $db->query($query, [':id' => $id])->fetch();

dd($posts);
