<?php

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
     * @var string
     */
    private $rosettaPath;

    public function __construct($slug, $library_path)
    {
        $this->slug = $slug;
        $this->library_path = $library_path;
        $this->rosettaPath = __DIR__ . '/../pages/rosetta/';
    }

    private function filemtime($js_file)
    {
        // correct the relative path
        $js_file = $this->rosettaPath . $js_file;
    }

    public function printPage()
    {
        $library_path = $this->library_path;
        $valid_slugs_and_libs = self::VALID_SLUGS_AND_LIBS;
        $slug = $this->slug;

        $this->printHeader('Artlung Rosetta: ' . $slug);

        ?>
        <link rel="stylesheet" href="rosetta.css<?php
        echo '?' . $this->filemtime('rosetta.css');
        ?>" type="text/css"/>
        <?php
            $js_files = [
                $library_path,
                'js/rosetta.js',
            ];
            foreach ($js_files as $js_file) {
                echo '<script src="' . $js_file .
                    '?v=' . $this->filemtime($js_file) . '"></script>' . "\n";
            }
            ?><script><?php echo $this->file_get_contents("js/$slug.js"); ?></script>
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
        print $this->file_get_contents('shared.html');
        ?>
        <?php
        $this->printFooter(
            [
            'comments' => false,
            ]
        );
    }

    private function file_get_contents(string $string)
    {
        $path = $this->rosettaPath . $string;
        return file_get_contents($path);
    }


}
