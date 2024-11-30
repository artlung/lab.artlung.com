<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('Slideshows Roughly How We did them in 1999');
?>

<h1>Slideshows Roughly How We did them in 1999</h1>

<?php

$HTML = <<<HTML
<TABLE BORDER>
    <TR>
        <TD COLSPAN="2" align=center bgcolor="#FFFFFF">
            <img src="https://artlung.com/archive/portfolio/1999/special/screenshot_blank.GIF" name="imageToSlide" height=400 width=200 ALT="[Slideshow Image]"></TD>
        </TD>
    </TR>
    <TR>
        <TD ALIGN="LEFT">
            <FONT FACE="Verdana, Arial, Sans-Serif">
                <B> <A HREF="#" ONCLICK="SlideShowGo(-1); return false" STYLE="text-decoration: none;" ONMOUSEOVER="window.status='PREVIOUS'; return true" ONMOUSEOUT="window.status=''; return true">&lt;&lt;BACKWARD</A> </B>
            </FONT>
        </TD>
        <TD ALIGN="RIGHT">
            <FONT FACE="Verdana, Arial, Sans-Serif">
                    <B> <A HREF="#" ONCLICK="SlideShowGo(1); return false" STYLE="text-decoration: none;" ONMOUSEOVER="window.status='NEXT'; return true" ONMOUSEOUT="window.status=''; return true">FORWARD&gt;&gt;</A></B>
                </FONT>
        </TD>
    </TR>
</TABLE>
HTML;

print $HTML;

?>
<h2>HTML</h2>

<pre><code><?php echo htmlentities($HTML); ?></code></pre>







<?php
$lab->printFooter([
    'comments' => true
]);