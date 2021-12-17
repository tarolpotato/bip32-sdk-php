<?php

namespace Jundayw\Bip32;

use Jundayw\Bip32\BufferInterface;

interface RbgInterface
{
    /**
     * Return $numBytes bytes deterministically derived from a seed
     *
     * @param int $numNumBytes
     * @return BufferInterface
     */
    public function bytes(int $numNumBytes): BufferInterface;
}
