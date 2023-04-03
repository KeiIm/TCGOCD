<?php

class Database {
    public $connection;

    public function __construct() {
        $this ->connection = mysqli_connect('localhost', 'root', '', 'tcgocd');
    }

    public function query($query) {
        $result = mysqli_query($this ->connection, $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC); // or fetch
    }

    public function addCard() {
            $name=$_POST['name'];
            $qty=$_POST['qty'];
            $collection=$_POST['collection'];
            isset($_POST['unique']) ? $unique = 1 : $unique = 0;
    
            mysqli_query($this ->connection, "INSERT INTO `cards` (`name`, `qty`, `unique`, `game`, `collection`) VALUES ('$name', '$qty', '$unique', 'netrunner', '$collection')");
    }

    // rewrite so one query function handles reading, writing, filtering
}

$db = new Database();
// $db = new Database($config['database']);


// $id = $_GET['id'];

// // $query = "select * from posts where id = {$id}"; // MAJOR SQL INJECT VULNERABILITY - in-line user input
// $query = "select * from posts where id = ?"; // question mark to only grab id, or can use a key (like id = :foo)

// $posts = $db -> query($query, [$id]) -> fetch(); // this adds safety. Or ($query, [':foo' => $id]->fetch();)
// dd($posts);





// Do I need a Card class?
class Card {
    public string $name;
    public int $qty;
    public bool $unique;
    public string $game;
    public string $collection;
}

// DELETE FROM cards WHERE name=x;
// name should be unique
// qty can't be negative