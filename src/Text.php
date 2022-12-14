<?php

namespace MyPackage\TestComposerPackage;

class Text
{
    /**
     * @param string $text
     * @param int $length
     * @return string
     */
    public static function cut(string $text, int $length): string
    {
        return mb_substr($text, 0, $length, 'utf-8');
    }
}