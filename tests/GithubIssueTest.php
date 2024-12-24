<?php


use ArtlungLab\GithubIssue;
use PHPUnit\Framework\TestCase;

class GithubIssueTest extends TestCase
{
    public function testGithubIssue()
    {
        $issue = new GithubIssue();
        $this->assertInstanceOf(GithubIssue::class, $issue);
    }

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
