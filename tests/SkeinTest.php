<?php

declare(strict_types=1);

namespace Cast\Crypto\Skein\Tests;

use function Cast\Crypto\Skein\skein256;
use PHPUnit\Framework\TestCase;

class SkeinTest extends TestCase
{
    public function test_skein250()
    {
        $entities = include(__DIR__.'/fixtures/skein256.php');

        foreach ($entities as $i => $entity) {
            [$algo, $validHashHex, $dataHex] = $entity;
            $this->assertEquals($validHashHex, skein256(hex2bin($dataHex)));
        }

        $this->assertEquals('b3250457e05d3060b1a4bbc1428bc75a3f525ca389aeab96cfa34638d96e492a', skein256('The quick brown fox jumps over the lazy dog'));
    }
}

