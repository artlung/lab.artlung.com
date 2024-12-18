<?php
namespace ArtlungLab;
/**
 * Class SiteMap
 *
 * @category PHP
 * @package  Classes
 * @author   Joe Crawford <joe@artlung.com>
 * @license  GPL 2.0+ - https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version  Release: 1.0
 * @link     https://artlung.com/
 * @since    2024-12-03
 */
class SiteMap
{

    private $_domain;
    private $_url_paths;
    private $_default_filectime;

    private $_protocol;

    /**
     * SiteMap constructor.
     *
     * @param array $url_paths Array of URL paths
     *
     * @return void
     */
    public function __construct($url_paths)
    {
        $this->_protocol = 'https';
        $this->_url_paths = $url_paths;
    }

    /**
     * Set the domain
     *
     * @param string $string Domain
     *
     * @return void
     */
    public function setDomain(string $string)
    {
        $this->_domain = $string;
    }

    /**
     * Print the sitemap. On the command line, this will print to stdout.
     *
     * @return void
     */
    public function output()
    {
        $protocol = $this->_protocol;
        $domain = $this->_domain;
        $url_paths = $this->_url_paths;

        $sitemap = [];
        foreach ($url_paths as $url) {
            $priority = '0.5';


            $how_many_slashes = substr_count($url, '/');

            $pathcheck = false;

            if ($how_many_slashes === 2) {
                $pathcheck = implode(
                    '/', [
                    trim($url, '/'),
                    trim($url, '/') . '.php'
                    ]
                );
            } else if ($how_many_slashes > 2) {
                $filename = basename($url);
                $pathcheck = implode(
                    '/', [
                    trim($url, '/'),
                    $filename . '.php'
                    ]
                );
            }
            $filectime = ($pathcheck && file_exists($pathcheck)) ? filectime($pathcheck) : $this->_default_filectime;

            $url = "$protocol://$domain$url";

            $sitemap[] = array(
                'loc' => $url,
                'lastmod' => date('Y-m-d', $filectime),
                'changefreq' => 'weekly',
                'priority' => $priority,
            );
        }

        if (php_sapi_name() != 'cli') {
            header('Content-Type: text/xml');
        }
        echo '<?xml version=\'1.0\' encoding=\'UTF-8\'?>';
        echo "\n";
        echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';
        echo "\n";
        foreach ($sitemap as $link) {
            echo "\t<url>\n";
            echo "\t\t<loc>" . htmlentities($link['loc']) . "</loc>\n";
            echo "\t\t<lastmod>{$link['lastmod']}</lastmod>\n";
            echo "\t\t<changefreq>{$link['changefreq']}</changefreq>\n";
            echo "\t\t<priority>{$link['priority']}</priority>\n";
            echo "\t</url>\n";
        }
        echo '</urlset>';
        echo "\n";
    }

    /**
     * Set the default filectime
     *
     * @param string $filectime Filectime
     *
     * @return void
     */
    public function setDefaultFilectime($filectime)
    {
        $this->_default_filectime = $filectime;
    }


}
