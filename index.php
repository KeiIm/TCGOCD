<?php
declare(strict_types = 1);
require './app/App.php';
require './router.php';


$db = new Database($config['database']);
$id = $_GET['id'];

// $query = "select * from posts where id = {$id}"; // MAJOR SQL INJECT VULNERABILITY - in-line user input
$query = "select * from posts where id = ?"; // question mark to only grab id, or can use a key (like id = :foo)

$posts = $db -> query($query, [$id]) -> fetch(); // this adds safety. Or ($query, [':foo' => $id]->fetch();)
dd($posts);