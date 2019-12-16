<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals('5F3Z-2E9W', $s->licenseKeyFormatting('5F3Z-2e-9-w', 4));
        $this->assertEquals('2-5G-3J', $s->licenseKeyFormatting('2-5g-3-J', 2));
    }

    public function testSolution2()
    {
        $s = new Solution();
        $this->assertEquals('5F3Z-2E9W', $s->licenseKeyFormatting2('5F3Z-2e-9-w', 4));
        $this->assertEquals('2-5G-3J', $s->licenseKeyFormatting2('2-5g-3-J', 2));
    }

    public function testSolution3()
    {
        $s = new Solution();
        $this->assertEquals('5F3Z-2E9W', $s->licenseKeyFormatting3('5F3Z-2e-9-w', 4));
        $this->assertEquals('2-5G-3J', $s->licenseKeyFormatting3('2-5g-3-J', 2));
    }
}
