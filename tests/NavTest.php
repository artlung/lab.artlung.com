<?php


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
     * Test the ignoredItems method
     *
     * @return void
     */
    public function testIgnoredItems()
    {
        $this->assertNotEmpty(Nav::ignoredDirectoryNames());
    }

    /**
     * Test the getMetadata method
     *
     * @return void
     */
    public function testGetMetadata()
    {
        //        $directories in ../pages/
        $pagesDirectory = dirname(__FILE__) . '/../pages/';
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

        }

    }
}
