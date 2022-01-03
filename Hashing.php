<?php

namespace Autoload;

class Hashing {
    /**
     * @param string $string
     * @return string
     */
    public function hash(string $string): string
    {
        return md5($string);
    }
}