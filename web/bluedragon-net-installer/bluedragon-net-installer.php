<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('Screenshots of an installation of BlueDragon 7.1 for the Microsoft .NET Framework');

?>
    <p class="date-attribution">Created November 17, 2010</p>
    <h1 class="p-name">
        Screenshots of an installation of BlueDragon 7.1 for the Microsoft .NET Framework
    </h1>

<?php

require_once 'BlueDragon.php';
$items = [
    'jsharp.h2',
    '2010-11-17_1348.png',
    '2010-11-17_1348_001.png',
    '2010-11-17_1349.png',
    '2010-11-17_1350.png',
    '2010-11-17_1353.png',
    'bluedragon.h2',
    '2010-11-17_1353_001.png',
    '2010-11-17_1353_002_instructions.txt',
    '2010-11-17_1353_002.png',
    '2010-11-17_1355.png',
    '2010-11-17_1355.png.txt',
    '2010-11-17_1355_001.png',
    '2010-11-17_1356.png',
    '2010-11-17_1356_001.png',
    '2010-11-17_1356_002.png',
    '2010-11-17_1357.png',
    '2010-11-17_1358.png',
    '2010-11-17_1358_001.png',
    'readme.h2',
    'BlueDragonInstalledReadMe.txt',
];








$out = array();
foreach ($items as $filename) {


    $extension = explode('.', $filename);
    $extension = strtolower(array_pop($extension));
    $extension = strtolower($extension);
    switch ($extension):
    case 'png':
        $out[] = BlueDragon::handlePng($filename);
        break;
    case 'txt':
        $out[] = BlueDragon::handleTxt($filename);
        break;
    case 'h2':
        $out[] = BlueDragon::handleH2($filename);
        break;
    default:
        $out[] = "I don't know what to do with {$filename}";
    endswitch;

}

$CONTENT = implode('<br />', $out);


?>
    <div id="bluedragon-net-installer">
        <?php echo $CONTENT; ?>
    </div>

<?php

$lab->printFooter(
    [
        'comments' => true,
    ]
);
