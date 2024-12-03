<?php
require_once '../../loader.php';
$lab = new Lab();
$lab->printHeader('Image Maps like we made them in 1997');

?>


    <table cellspacing="0" cellpadding="0" border="0">
        <tbody>
        <tr valign=top>
            <td>
                <a href="master.map"><img src="master.gif" width=83 height=473 ismap></a>
            </td>
            <td>

                <h1>Image Maps like we made them in 1997</h1>

                <?php
                $valid = ["Search",
                    "About ARCO",
                    "News",
                    "Products & Services",
                    "Financials",
                    "Careers",
                    "Reports",
                    "Operations",
                    "Help/Email"];
                $test = $_GET['n'] ?? '';
                if (in_array($test, $valid)) {
                    echo '<h2>You navigated to the ' . htmlentities($test) . ' page.</h2>';
                }
                ?>

                <h3>The code around the navigational image on this page:</h3>
                <pre><?php
                    print htmlentities('<a href="master.map"><img src="master.gif" width=83 height=473 ismap></a>');
                ?></pre>

                <h3>On the server is a file called "master.map" which contains:</h3>
                <pre><?php
                    print file_get_contents('master.map'); ?></pre>


                <p><em>Syntax of that map file come from <a
                                href="https://httpd.apache.org/docs/2.4/mod/mod_imagemap.html">Apache</a></em>.
                    Originally this image was on <a href="https://web.archive.org/web/19971024124040/https://arco.com/">here</a>.
                </p>

                <p>Clicking on the link where the img tag inside has the ismap attribute will call the link like:
                <pre>https://lab.artlung.com/server-side-image-map/master.map?14,114</pre>
                And then apache does the lookup and turns that x,y coordinate pair into
                <pre>https://lab.artlung.com/server-side-image-map/?n=News</pre>

                From <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img#attr-ismap">MDN</a>:
                <blockquote>
                    This Boolean attribute indicates that the image is part of a server-side map. If so, the coordinates
                    where the user clicked on the image are sent to the server.<br/><br/>
                    This attribute is allowed only if the &lt;img&gt; element is a descendant of an &lt;a&gt; element
                    with a valid href attribute. This gives users without pointing devices a fallback destination.
                </blockquote>


            </td>
        </tr>
        </tbody>
    </table>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
