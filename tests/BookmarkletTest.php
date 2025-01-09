<?php


use ArtlungLab\Bookmarklet;
use PHPUnit\Framework\TestCase;

/**
 * Class BookmarkletTest
 *
 * @category PHP
 * @package  Tests
 * @author   Joe Crawford <joe@artlung.com>
 * @license  GPL 2.0+ - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version  Release: 1.0
 * @link     https://artlung.com/
 * @since    2024-12-03
 */
class BookmarkletTest extends TestCase
{
    /**
     * Test the javascriptToBookmarklet method
     *
     * @return void
     * @throws Exception
     */
    public function testJavascriptToBookmarklet()
    {
        $js = 'console.log("Hello, World!");';
        $bookmarklet = Bookmarklet::javascriptToBookmarklet($js);
        $this->assertEquals('console.log%28%22Hello%2C%20World%21%22%29%3B', $bookmarklet);
    }

}
