<?php

namespace Nowfel\TextFoundationBundle;

use Nowfel\TextFoundationBundle\Exceptions\NumericValueToTextException;

class TextFoundation
{
    /**
     * Convert string to an uppercase.
     */
    public function toUpperCase(string $text): string
    {
        if (is_numeric($text)) {
            throw new NumericValueToTextException("$text contains only numeric value");
        }
        return strtoupper($text);
    }

    /**
     * Convert string to an lowercase.
     */
    public function toLowerCase(string $text): string
    {
        if (is_numeric($text)) {
            throw new NumericValueToTextException("$text contains only numeric value");
        }
        return strtolower($text);
    }
}