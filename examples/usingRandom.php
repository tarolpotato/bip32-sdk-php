<?php

require __DIR__ . "/../../../../vendor/autoload.php";

use Jundayw\Bip32\Random;

$random = new Random();
$buffer = $random->bytes();

echo "return a formatted version for var_dump  : " . var_export($buffer->debug(), true) . PHP_EOL;
echo PHP_EOL;
