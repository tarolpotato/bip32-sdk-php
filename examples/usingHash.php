<?php

require __DIR__ . "/../../../../vendor/autoload.php";

use Jundayw\Bip32\Buffer;
use Jundayw\Bip32\Hash;

// Binary data and ASCII can be passed directly to a Buffer
$binary = new Buffer('hello world');
echo "Buffer 1: binary  : " . $binary->getBinary() . PHP_EOL;
echo "Buffer 1: hex     : " . $binary->getHex() . PHP_EOL;
echo PHP_EOL;

echo "Hash 1: sha256ripe160     : " . Hash::sha256ripe160($binary)->getHex() . PHP_EOL;
echo "Hash 2: sha256            : " . Hash::sha256($binary)->getHex() . PHP_EOL;
echo "Hash 3: sha256d           : " . Hash::sha256d($binary)->getHex() . PHP_EOL;
echo "Hash 4: ripemd160         : " . Hash::ripemd160($binary)->getHex() . PHP_EOL;
echo "Hash 5: ripemd160d        : " . Hash::ripemd160d($binary)->getHex() . PHP_EOL;
echo "Hash 6: sha1              : " . Hash::sha1($binary)->getHex() . PHP_EOL;
echo PHP_EOL;
