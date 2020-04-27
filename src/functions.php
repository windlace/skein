<?php

declare(strict_types=1);

namespace Cast\Crypto\Skein;

function SHR($x, $c)
{
    $x        = intval($x); // Because 13.5 >> 0 returns 13. We follow.
    $nmaxBits = PHP_INT_SIZE * 8;
    $c        %= $nmaxBits;
    if ($c)
        return $x >> $c & ~ (-1 << $nmaxBits - $c);
    else
        return $x;
}

function skein256($string)
{
    return Skein256::hash($string);
}

