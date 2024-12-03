<?php


use PHPUnit\Framework\TestCase;

/**
 * Class YearsTest
 *
 * @category PHP
 * @package  Tests
 * @author   Joe Crawford <joe@artlung.com>
 * @license  GPL 2.0+ - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version  Release: 1.0
 * @link     https://artlung.com/
 * @since    2024-12-03
 */
class YearsTest extends TestCase
{
    /**
     * Test the slugsAndYears method
     *
     * @return void
     */
    public function testSlugsAndYears()
    {
        $this->assertNotEmpty(Years::slugsAndYears());

    }


}
