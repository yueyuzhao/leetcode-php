<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testIsSub()
    {
        $s = new Solution();
        $this->assertTrue($s->isSub('abc', 'aabbcc'));
        $this->assertFalse($s->isSub('cca', 'abcabc'));
    }

    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(3, $s->findLUSlength(['aba', 'cdc', 'eae']));
        $this->assertEquals(-1, $s->findLUSlength(['aaa', 'aaa', 'aa']));
        $this->assertEquals(2, $s->findLUSlength(["aabbcc", "aabbcc","cb","abc"]));
        $this->assertEquals(7, $s->findLUSlength(["aabbcc", "aabbcc","bc","bcc", "aabbccc"]));
        $this->assertEquals(3, $s->findLUSlength(["abcabc","abcabc","abcabc","abc","abc","cca"]));
    }
}
