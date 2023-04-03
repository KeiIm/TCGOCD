<?php
declare(strict_types = 1);


// Dump and Die
function dd($value):null {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}


// User POSTs new card, executed in cards.view.php
function addCard($db) {
    if(isset($_POST['name']) && isset($_POST['qty']) && isset($_POST['collection'])) {

        $name=$_POST['name'];
        $qty=$_POST['qty'];
        $collection=$_POST['collection'];
        ($_POST['unique'] === 'on') ? $unique = 1 : $unique = 0;

        $db->connection->query("INSERT INTO `cards` (`name`, `qty`, `unique`, `game`, `collection`) VALUES ('$name', '$qty', '$unique', 'netrunner', '$collection')");
    }
};