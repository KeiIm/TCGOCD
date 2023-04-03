<?php
declare(strict_types = 1);


// Dump and Die
function dd($value):null {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}