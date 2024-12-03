<?php


use PHPUnit\Framework\TestCase;

class YearsTest extends TestCase
{
    public function testSlugsAndYears()
    {
        $this->assertNotEmpty(Years::slugsAndYears());

    }


}
