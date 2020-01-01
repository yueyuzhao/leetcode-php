<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals([[1, 2, 3, 4]], $s->matrixReshape([
            [1, 2],
            [3, 4],
        ], 1, 4));

        $this->assertEquals([[1, 2], [3, 4]], $s->matrixReshape([
            [1, 2],
            [3, 4],
        ], 2, 4));

        $this->assertEquals([[1, 2], [3, 4]], $s->matrixReshape([
            [1, 2, 3, 4],
        ], 2, 2));
    }
}
