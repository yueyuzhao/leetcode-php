<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(
            ["0:01", "0:02", "0:04", "0:08", "0:16", "0:32", "1:00", "2:00", "4:00", "8:00"],
            $s->readBinaryWatch(1)
        );

        $this->assertEquals(
            ["0:00"],
            $s->readBinaryWatch(0)
        );
    }
}
