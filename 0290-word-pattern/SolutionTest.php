<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();

        $this->assertTrue($s->wordPattern('abba', 'dog cat cat dog'));
        $this->assertFalse($s->wordPattern('abba', 'dog cat cat fish'));
        $this->assertFalse($s->wordPattern('aaaa', 'dog cat cat dog'));
        $this->assertFalse($s->wordPattern('abba', 'dog dog dog dog'));
    }

    public function testSolution2()
    {
        $s = new Solution();

        $this->assertTrue($s->wordPattern2('abba', 'dog cat cat dog'));
        $this->assertFalse($s->wordPattern2('abba', 'dog cat cat fish'));
        $this->assertFalse($s->wordPattern2('aaaa', 'dog cat cat dog'));
        $this->assertFalse($s->wordPattern2('abba', 'dog dog dog dog'));
    }
}
