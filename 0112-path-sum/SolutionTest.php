<?php

require('./Solution.php');

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
    public function testClass()
    {
        $this->assertTrue(class_exists('Solution'));
    }
}