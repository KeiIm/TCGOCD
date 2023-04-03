<?php

// MySQL (+ Procedural Variant)
// $mysqli = new mysqli('localhost', 'root', '', 'tcgocd'); // mysqli_connect()
// $result = $mysqli->query("SELECT * FROM `cards`;"); // mysqli_query($mysqli, "")
// $rows = $result->fetch_all(MYSQLI_ASSOC); // mysqli_fetch_all($result, MYSQLI_ASSOC)

class Database {
    public $connection;

    public function __construct() {
        $this ->connection = mysqli_connect('localhost', 'root', '', 'tcgocd');
    }

    public function query($query) {
        $result = mysqli_query($this ->connection, $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC); // or fetch
    }

    // rewrite function to enable writing
}

$db = new Database();
// $db = new Database($config['database']);


// dd($db->query("SELECT * FROM `cards`;")); //  where qty = 1


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