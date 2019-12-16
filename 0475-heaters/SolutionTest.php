<?php


require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(1, $s->findRadius([1, 2, 3], [2]));
        $this->assertEquals(1, $s->findRadius([1, 2, 3, 4], [1, 4]));
        $this->assertEquals(3, $s->findRadius([1, 2, 3, 4], [1]));
        $this->assertEquals(3, $s->findRadius([1, 5], [2]));
        $this->assertEquals(9, $s->findRadius([1, 5], [10]));
        $this->assertEquals(2, $s->findRadius([1, 2, 3, 4, 5], [3, 10]));
        $this->assertEquals(3, $s->findRadius([10, 11, 12], [1, 2, 3, 13, 14]));
        $this->assertEquals(0, $s->findRadius([1, 2, 3, 2], [1, 2, 3, 2]));
        $this->assertEquals(161834419, $s->findRadius(
            [101027544, 144108930, 282475249, 457850878, 458777923, 470211272, 622650073, 984943658],
            [16531729, 74243042, 114807987, 115438165, 137522503, 143542612, 441282327, 784484492, 823378840, 823564440]
        ));
    }
}

