<?php

use App\OCP\Csv;
use App\OCP\Reader;
use App\OCP\Txt;

require_once __DIR__ . "/vendor/autoload.php";

$directory = __DIR__ . "/files";

/**
 * CSV
 */

$file = new Csv("dados.csv");
$reader = new Reader($directory, $file);
var_dump($reader->readFile());

echo "<hr/>";

/**
 * TXT
 */

$file = new Txt("dados.txt");
$reader = new Reader($directory, $file);
var_dump($reader->readFile());

