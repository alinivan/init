<?php

namespace alinivan;
require_once 'vendor/autoload.php';

class Labeler {
    public function label(string $string): string
    {
        return md5($string);
    }
}