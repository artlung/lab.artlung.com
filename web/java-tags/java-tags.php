<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('HTML Tags for Java Applets, circa 1999');

?>

    <p class="date-attribution">1999</p>
    <h1 class="p-name">HTML Tags for Java Applets</h1>

    <p>In 1999, I took a class in Java at Santa Monica College. I was interested at the time in the small variations
        among how The W3C, Sun, Netscape, and Microsoft specified the <code>&lt;APPLET&gt;</code> tag.</p>

    <p>So here are how each specified the tag in 1999, minus the formatting of the original pages:</p>
<?php
/**
 * Navigation function
 *
 * @param $url
 * @param $title
 * @param $text
 * @param $class

 * @return string
 */
function newnavToggle2($url, $title, $text, $class)
{
    global $filename;
    $active = "";
    if ($filename == $url) {
        $active = "active";
        return "<span class='$class $active'>$text</span>";
    }
    return "<a href='/java-tags/-$url' title='$title' class='$class $active'>$text</a>";
}

$valid_pages_and_titles = [
    'applet-tag-all.php' => 'All Tags',
    'applet-tag-3.2.php' => 'W3C - HTML 3.2',
    'applet-tag-4.0.php' => 'W3C - HTML 4.0',
    'applet-tag-microsoft.php' => 'Microsoft',
    'applet-tag-netscape.php' => 'Netscape',
    'applet-tag-sun.php' => 'Sun',
];

$filename = $_GET['f'] ?? array_keys($valid_pages_and_titles)[0];

if (!in_array($filename, array_keys($valid_pages_and_titles))) {
    $filename = array_keys($valid_pages_and_titles)[0];
}

?>
    <p id="java-tags">
        <?php foreach ($valid_pages_and_titles as $url => $title) { ?>
            <?php echo newnavToggle2($url, $title, $title, 'nav-link') ?>
        <?php } ?>
    </p>

    <h2>
        <?php echo $valid_pages_and_titles[$filename] ?>
    </h2>

<?php if ($filename === 'applet-tag-all.php') : ?>
    <?php
    include __DIR__ . "/$filename";
    ?>
<?php else: ?>
    <pre><?php
        $path = __DIR__ . "/$filename";
        include $path;
    ?>
        </pre>
<?php endif; ?>

    <link rel="stylesheet" href="java-tags.css<?php
    echo '?' . filemtime('java-tags.css');
    ?>" type="text/css"/>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
