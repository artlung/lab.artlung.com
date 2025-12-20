<?php


use ArtlungLab\Nav;
use PHPUnit\Framework\TestCase;

/**
 * Class NavTest
 *
 * @category PHP
 * @package  Tests
 * @author   Joe Crawford <joe@artlung.com>
 * @license  GPL 2.0+ - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version  Release: 1.0
 * @link     https://artlung.com/
 * @since    2024-12-03
 */
class NavTest extends TestCase
{

    /**
     * Test the getMetadata method
     *
     * @return void
     */
    public function testGetMetadata()
    {
        $pagesDirectory = dirname(__FILE__) . '/../web/';
        $directories = array_diff(scandir($pagesDirectory), ['..', '.']);
        $valid_directories = [];
        foreach ($directories as $dir) {
            if (is_dir($pagesDirectory . $dir)) {
                $valid_directories[] = $dir;
            }
        }
        foreach (Nav::getMetadata() as $dir => $metadataArray) {
            $this->assertContains($dir, $valid_directories);

            // and assert that $slug/$slug.php exists
            // and assert that $slug/index.php exists
            $this->assertFileExists($pagesDirectory . $dir . '/' . $dir . '.php');
            $this->assertFileExists($pagesDirectory . $dir . '/index.php');
            $this->assertArrayHasKey('title', $metadataArray, "Title missing for $dir");
            $this->assertArrayHasKey('year', $metadataArray, "Year missing for $dir");
            $this->assertIsInt($metadataArray['year'], "Year is not an integer for $dir");
            $this->assertGreaterThan(1990, $metadataArray['year'], "Year is not greater than 1990 for $dir");

            $this->assertArrayHasKey('tags', $metadataArray, "Tags missing for $dir");
            $this->assertIsArray($metadataArray['tags'], "Tags is not an array for $dir");

            $this->assertGreaterThan(0, count($metadataArray['tags']), "Tags is empty for $dir, all pages should have at least one page");

            $excluded_dirs = [
                'wml',
            ];

            if (!in_array($dir, $excluded_dirs)) {
                $this->assertArrayHasKey('slug', $metadataArray, "Slug missing for $dir");
                $this->assertEquals($dir, $metadataArray['slug'], "Slug does not match directory name for $dir");
            }


            $this->assertArrayHasKey('canonical_url', $metadataArray, "Canonical URL missing for $dir");
            $this->assertStringContainsString('https://lab.artlung.com/', $metadataArray['canonical_url'], "Canonical URL does not contain https://lab.artlung.com/ for $dir");

            $this->assertArrayHasKey('webmention_last_checked', $metadataArray, "webmention_last_checked missing for $dir");
            $this->assertIsInt($metadataArray['webmention_last_checked'], "webmention_last_checked is not a string for $dir");

            $this->assertArrayHasKey('webmention_count', $metadataArray, "webmention_count missing for $dir");
            $this->assertIsInt($metadataArray['webmention_count'], "webmention_count is not an integer for $dir");

            // if an element has the key atom_feed_publish_date it must be a date
            if (array_key_exists('atom_feed_publish_date', $metadataArray)) {
                $this->assertNotEmpty($metadataArray['atom_feed_publish_date'], "atom_feed_publish_date is empty for $dir");
                $this->assertIsString($metadataArray['atom_feed_publish_date'], "atom_feed_publish_date is not a string for $dir");
            }



        }

    }
}
