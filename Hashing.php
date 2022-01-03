<?php

namespace Autoload;
require 'vendor/autoload.php';

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