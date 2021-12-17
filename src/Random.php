<?php

namespace Jundayw\Bip32;

use Exception;
use Jundayw\Bip32\BufferInterface;
use Jundayw\Bip32\RbgInterface;

class Random implements RbgInterface
{
    /**
     * Return $length bytes. Throws an exception if
     * @param int $length
     * @return BufferInterface
     * @throws Exception
     */
    public function bytes(int $length = 32): BufferInterface
    {
        return new Buffer(random_bytes($length), $length);
    }
}