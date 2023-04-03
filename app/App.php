<?php
declare(strict_types = 1);


// MySQL
$mysqli = new mysqli('localhost', 'root', '', 'tcgocd'); // mysqli_connect()
$result = $mysqli->query("SELECT * FROM `cards`;"); // myaqli_query()
$rows = $result->fetch_all(MYSQLI_ASSOC); // mysqli_fetch_all($result, MYSQLI_ASSOC)


// Dump and Die
function dd($value):null {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}


// User POSTs new card, executed in cards.view.php
function addCard() {
    if(isset($_POST['name']) && isset($_POST['qty']) && isset($_POST['collection'])) {

        $name=$_POST['name'];
        $qty=$_POST['qty'];
        $collection=$_POST['collection'];
        ($_POST['unique'] === 'on') ? $unique = 1 : $unique = 0;

        $conn = mysqli_connect('localhost', 'root', '', 'tcgocd');
        $sql = $conn->query("INSERT INTO `cards` (`name`, `qty`, `unique`, `game`, `collection`) VALUES ('$name', '$qty', '$unique', 'netrunner', '$collection')");
    }
};


// Manual sample card entry in case database is down
function getCards(): array {
    $sample=[];
    $sample[]=[
        'name' => 'Sample 1',
        'qty' => 3,
        'unique' => false,
        'game' => 'netrunner',
        'collection' => 'Loose',
    ];
    $sample[]=[
        'name' => 'Sample 2',
        'qty' => 1,
        'unique' => true,
        'game' => 'netrunner',
        'collection' => 'Loose',
    ];
    $sample[]=[
        'name' => 'Sample 3',
        'qty' => 2,
        'unique' => false,
        'game' => 'netrunner',
        'collection' => 'Binder 1',
    ];
    $sample[]=[
        'name' => 'Sample 4',
        'qty' => 0,
        'unique' => false,
        'game' => 'netrunner',
        'collection' => 'Deck 1',
    ];
    $sample[]=[
        'name' => 'Sample 5',
        'qty' => 2,
        'unique' => true,
        'game' => 'netrunner',
        'collection' => 'Deck 1',
    ];
    return $sample;
}
$cards = [];
$cards = array_merge($cards, getCards());

class Card {
    public string $name;
    public int $qty;
    public bool $unique;
    public string $game;
    public string $collection;
}

$card = new Card();
$card -> name = 'Sample 8';
$card -> qty = 5;
$card -> unique = true;
$card -> game = 'netrunner';
$card -> collection = 'Deck 2';

// DELETE FROM cards WHERE name=x;
// name should be unique
// qty can't be negative