<?php

namespace Nowfel\TextFoundationBundle;

class TextFoundation
{
    /**
     * Convert string to an uppercase.
     */
    public function toUpperCase(string $text): string
    {
        return strtoupper($text);
    }

    public function toLowerCase(string $text): string
    {
        return strtolower($text);
    }
}