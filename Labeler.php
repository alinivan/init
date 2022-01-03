<?php

namespace Autoload;
require 'vendor/autoload.php';

class Labeler {
    public function label(string $string): string
    {
        return md5($string);
    }
}