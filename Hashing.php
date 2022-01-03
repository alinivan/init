<?php

namespace alinivan;
require_once 'vendor/autoload.php';

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