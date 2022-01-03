<?php

namespace Autoload;

class StringValidator {
    /**
     * @param string $string
     * @param int $chars
     * @return bool
     */
    protected function stringContainsTheseNumberOfChars(string $string, int $chars): bool
    {
        return strlen($string) <= $chars;
    }
}