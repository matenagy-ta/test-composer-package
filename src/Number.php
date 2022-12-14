<?php

namespace MyPackage\TestComposerPackage;

class Number
{
    /**
     * @param int $min
     * @param int $max
     * @return int
     */
    public static function random(int $min, int $max): int
    {
        return mt_rand($min, $max);
    }
}