<?php

/**
 * Class Rosetta
 *
 * @category PHP
 * @package  Classes
 * @author   Joe Crawford <joe@artlung.com>
 * @license  GPL 2.0+ - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version  Release: 1.0
 * @link     https://artlung.com/
 * @since    2024-12-03
 */
class Rosetta extends Lab
{

    const VALID_SLUGS_AND_LIBS = [
        'dojo' => 'js/lib/dojo.xd.js',
        'ext' => 'js/lib/ext-core.3.0.0.js',
        'glow' => 'js/lib/glow.1.6.0.core.js',
        'jquery' => 'js/lib/jquery-1.3.2.min.js',
        'mootools' => 'js/lib/mootools-yui-compressed.1.2.3.js',
        'prototype' => 'js/lib/prototype.1.6.1.js',
    ];
    public $slug;
    public $library_path;
    /**
     * PAth to the rosetta directory
     *
     * @var string
     */
    private $_rosettaPath;

    /**
     * Set up basics for Rosetta
     *
     * @param $slug
     * @param $library_path
     */
    public function __construct($slug, $library_path)
    {
        $this->slug = $slug;
        $this->library_path = $library_path;
        $this->_rosettaPath = __DIR__ . '/../pages/rosetta/';
    }

    /**
     * Kind of a hack to get the filemtime of a file
     *
     * @param $js_file
     *
     * @return void
     */
    private function _filemtime($js_file)
    {
        // correct the relative path
        $js_file = $this->_rosettaPath . $js_file;
    }

    /**
     * The method to print the page
     *
     * @return void
     */
    public function printPage()
    {
        $library_path = $this->library_path;
        $valid_slugs_and_libs = self::VALID_SLUGS_AND_LIBS;
        $slug = $this->slug;

        $this->printHeader('Artlung Rosetta: ' . $slug);

        ?>
        <link rel="stylesheet" href="rosetta.css<?php
        echo '?' . $this->_filemtime('rosetta.css');
        ?>" type="text/css"/>
        <?php
            $js_files = [
                $library_path,
                'js/rosetta.js',
            ];
            foreach ($js_files as $js_file) {
                echo '<script src="' . $js_file .
                    '?v=' . $this->_filemtime($js_file) . '"></script>' . "\n";
            }
            ?><script><?php echo $this->_fileGetContents("js/$slug.js"); ?></script>
    <nav>
        <ul>
            <?php
            echo "<li><a href='./'>Rosetta</a></li>";
            foreach ($valid_slugs_and_libs as $trySlug => $tryPath) {

                // style="background-color:rgb(204, 204, 204);color: #000;"
                $style = $slug === $trySlug ? 'style="background-color:rgb(204, 204, 204);color: #000;"' : '';
                echo "<li><a href='./?$trySlug' $style>$trySlug</a></li>";
            }
            ?>
        </ul>
    </nav>
        <?php
        print $this->_fileGetContents('shared.html');
        ?>
        <?php
        $this->printFooter(
            [
            'comments' => false,
            ]
        );
    }

    /**
     * Kind of a hack to get the file contents of a file
     *
     * @param string $string
     *
     * @return false|string
     */
    private function _fileGetContents(string $string)
    {
        $path = $this->_rosettaPath . $string;
        return file_get_contents($path);
    }


}
