<?php
require 'vendor/autoload.php';

if (PHP_SAPI !== 'cli') {
    exit;
}

$what = $argv[1] ?? null;

// does web/$what exist?
if (!$what) {
    echo "Usage: php create-page.php <slug>\n";
    exit;
}

if (is_dir(__DIR__ . "/web/$what")) {
    echo "Directory web/$what already exists.\n";
    exit;
}

mkdir(__DIR__ . "/web/$what");

$yaml_data = [
    'title' => $what,
];

Spyc::YAMLDump($yaml_data, __DIR__ . "/web/$what/$what.yaml");

$content = '<?php
require_once __DIR__ . \'/../../loader.php\';
$lab = new ArtlungLab\Lab();
$lab->printHeader(
    \''. $what .
    '\'
);

?>


    <p class="date-attribution">Created '. date('M Y').'</p>
    <h1 class="p-name">'. $what.'</h1>';


file_put_contents(__DIR__ . "/web/$what/$what.scss", '');
file_put_contents(__DIR__ . "/web/$what/index.php", "<?php\nrequire \"$what.php\";");
file_put_contents(__DIR__ . "/web/$what/$what.php", $content);


