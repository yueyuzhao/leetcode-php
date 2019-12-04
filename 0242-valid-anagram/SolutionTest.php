<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertTrue($s->isAnagram('anagram', 'nagaram'));
        $this->assertFalse($s->isAnagram('rat', 'car'));
        $this->assertFalse($s->isAnagram('a', 'ab'));
        $this->assertTrue($s->isAnagram('我是', '是我'));
    }

    public function testSolution2()
    {
        $s = new Solution();
        $this->assertTrue($s->isAnagram2('anagram', 'nagaram'));
        $this->assertFalse($s->isAnagram2('rat', 'car'));
        $this->assertFalse($s->isAnagram2('a', 'ab'));
        $this->assertTrue($s->isAnagram2('我是', '是我'));
    }

    public function testSolution3()
    {
        $s = new Solution();
        $this->assertTrue($s->isAnagram3('anagram', 'nagaram'));
        $this->assertFalse($s->isAnagram3('rat', 'car'));
        $this->assertFalse($s->isAnagram3('a', 'ab'));
        $this->assertTrue($s->isAnagram3('我是', '是我'));
        $this->assertFalse($s->isAnagram3('a', 'aa'));
    }
}
