<?php


use ArtlungLab\GithubIssue;
use PHPUnit\Framework\TestCase;

/**
 * Class GithubIssueTest
 *
 * @category PHP
 * @package  Tests
 * @author   Joe Crawford <joe@artlung.com>
 * @license  GPL 2.0+ - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version  Release: 1.0
 * @link     https://artlung.com/
 * @since    2024-12-03
 */
class GithubIssueTest extends TestCase
{

    /**
     * Test the getLink static method
     *
     * @return void
     */
    public function testGetLink()
    {
        $options = [
            'title' => '404: /foo/',
            'body' => "I got a not found error",
            'labels' => ['bug', '404'],
            'url' => 'https://lab.artlung.com/foo/'
        ];
        $expected = 'https://github.com/artlung/lab.artlung.com/issues/new?title=404%3A+%2Ffoo%2F&body=I+got+a+not+found+error%0A%0Ahttps%3A%2F%2Flab.artlung.com%2Ffoo%2F&labels=bug%2C404&url=https%3A%2F%2Flab.artlung.com%2Ffoo%2F';
        $this->assertEquals($expected, GithubIssue::getLink($options));
    }

}
