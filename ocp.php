<?php

use App\OCP\Reader;

require_once __DIR__ . "/vendor/autoload.php";

$directory = __DIR__ . "/files";

/**
 * CSV
 */

$file = "dados.csv";
$reader = new Reader($directory, $file);
var_dump($reader->readFile());

echo "<hr/>";

/**
 * TXT
 */

$file = "dados.txt";
$reader = new Reader($directory, $file);
var_dump($reader->readFile());

