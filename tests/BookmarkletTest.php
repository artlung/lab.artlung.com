<?php


use ArtlungLab\Bookmarklet;
use PHPUnit\Framework\TestCase;

class BookmarkletTest extends TestCase
{
    public function testJavascriptToBookmarklet()
    {
        $js = 'console.log("Hello, World!");';
        $bookmarklet = Bookmarklet::javascriptToBookmarklet($js);
        $this->assertEquals('console.log%28%22Hello%2C%20World%21%22%29%3B', $bookmarklet);
    }

}
