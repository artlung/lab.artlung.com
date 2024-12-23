<?php


use ArtlungLab\Webmentions;
use PHPUnit\Framework\TestCase;
/**
 * Class WebmentionTest
 *
 * @category PHP
 * @package  Tests
 * @author   Joe Crawford <joe@artlung.com>
 * @license  GPL 2.0+ - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version  Release: 1.0
 * @link     https://artlung.com/
 * @since    2024-12-03
 */
class WebmentionTest extends TestCase
{
    /**
     * Test the getWebmentions method, plus the Mention objects in it
     *
     * @return void
     */
    public function testGetWebmentions()
    {
        // get all the slugs from Nav::getMetadata()

        $nav_items = \ArtlungLab\Nav::getMetadata();
        $slugs = array_keys($nav_items);

        // for each slug, get the mentions

        foreach ($slugs as $slug) {
            $webmention = new Webmentions($slug);
            $mentions = $webmention->getMentions();
            $this->assertIsArray($mentions, "Mentions for $slug are not an array");
            foreach ($mentions as $mention) {
                $this->assertInstanceOf(\ArtlungLab\Mention::class, $mention);
                $data = $mention->getData();
                $this->assertArrayHasKey('author', $data, "Author missing for $slug");
                // author has keys name, photo, url
                $this->assertArrayHasKey('name', $data['author'], "Author name missing for $slug");
                $this->assertArrayHasKey('photo', $data['author'], "Author photo missing for $slug");
                $this->assertArrayHasKey('url', $data['author'], "Author url missing for $slug");
                $this->assertArrayHasKey('published', $data, "Published missing for $slug");
                $this->assertArrayHasKey('url', $data, "URL missing for $slug");
                $this->assertArrayHasKey('wm-property', $data, "wm-property missing for $slug");
                $this->assertArrayHasKey('wm-source', $data, "wm-source missing for $slug");
                $this->assertArrayHasKey('wm-target', $data, "wm-target missing for $slug");
                $this->assertArrayHasKey('wm-protocol', $data, "wm-protocol missing for $slug");
                $this->assertArrayHasKey('wm-received', $data, "wm-received missing for $slug");
                $this->assertArrayHasKey('wm-id', $data, "wm-id missing for $slug");
                $this->assertArrayHasKey('type', $data, "type missing for $slug");
                // mention-of does not reliably exist
                $this->assertArrayHasKey('wm-private', $data, "wm-private missing for $slug");
                $this->assertIsString($mention->getAuthorPhoto(), "Author photo for $slug is not a string");
                $this->assertIsString($mention->getAuthorName(), "Author name for $slug is not a string");

                $this->assertIsString($mention->getUrl(), "URL for $slug is not a string");
                $this->assertIsString($mention->getWmReceived(), "wm-received for $slug is not a string");
                $this->assertIsInt(strtotime($mention->getWmReceived()), "wm-received for $slug is not a valid date");

                $this->assertIsString($mention->getPublished(), "Published for $slug is not a string");






            }

        }


    }

}
