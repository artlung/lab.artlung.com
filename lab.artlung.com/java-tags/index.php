<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
HTML Tags for Java Applets, circa 1999
<?php include_once("../inc.header2of2.php"); ?>

<h1>HTML Tags for Java Applets, circa 1999</h1>

<p>In 1999, I took a class in Java at Santa Monica College. I was interested at the time in the small variations among how The W3C, Sun, Netscape, and Microsoft specified the &lt;APPLET&gt; tag.</p>

<p>So here are how each specified the tag in 1999, minus the formatting of the original pages:</p>

<h2>

<?php

$valid_pages = [
        'applet-tag-3.2.php',
        'applet-tag-4.0.php',
        'applet-tag-microsoft.php',
        'applet-tag-netscape.php',
        'applet-tag-sun.php',
];

$f = $_GET['f'];

if (!in_array($f, $valid_pages)) {
    $f = $valid_pages[0];
}


function newnavToggle2($url, $title, $text, $class) {
    global $f;
    $active = "";
    if ($f == $url) {
        $active = "active";
        return "<span class='$class $active'>$text</span>";
    }
    return "<a href='/java-tags/-$url' title='$title' class='$class $active'>$text</a>";
}
?>

<?php echo  newnavToggle2("applet-tag-3.2.php","","W3C - HTML 3.2","") ?> |
<?php echo  newnavToggle2("applet-tag-4.0.php","","W3C - HTML 4.0","") ?> |
<?php echo  newnavToggle2("applet-tag-microsoft.php","","Microsoft","") ?> |
<?php echo  newnavToggle2("applet-tag-netscape.php","","Netscape","") ?> |
<?php echo  newnavToggle2("applet-tag-sun.php","","Sun","") ?>
</h2>

<pre><?php
    $path = __DIR__ . "/$f";
    print file_get_contents($path);
?>
</pre>

<?php include_once("../inc.footer.php"); ?>
