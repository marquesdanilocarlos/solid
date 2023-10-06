<?php

use App\OCP\Reader;

require_once __DIR__ . "/vendor/autoload.php";

$directory = __DIR__ . "/files";
$file = "dados.csv";

$reader = new Reader($directory, $file);
var_dump($reader->readFile());