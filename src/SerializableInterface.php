<?php

namespace Jundayw\Bip32;

interface SerializableInterface
{
    /**
     * @return Buffer
     */
    public function getBuffer();
}
