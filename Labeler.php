<?php

namespace Autoload;

class Labeler {
    public function label(string $string): string
    {
        return md5($string);
    }
}