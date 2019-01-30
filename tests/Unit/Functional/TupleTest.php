<?php

declare(strict_types=1);

namespace Siler\Test\Unit;

use PHPUnit\Framework\TestCase;
use function Siler\Functional\tuple;

class TupleTest extends TestCase
{
    public function testTuple()
    {
        $tuple = tuple(1, 'a', true);

        $this->assertFalse(is_array($tuple));
        $this->assertSame(1, $tuple[0]);
        $this->assertSame('a', $tuple[1]);
        $this->assertSame(true, $tuple[2]);
        $this->assertTrue(isset($tuple[1]));
    }

    /**
     * @expectedException \OutOfRangeException
     */
    public function testOutOfRangeGet()
    {
        $tuple = tuple(1);
        $tuple[1];
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testImmutableSet()
    {
        $tuple = tuple(1);
        $tuple[1] = 2;
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testImmutableUnset()
    {
        $tuple = tuple(1);
        unset($tuple[0]);
    }
}
