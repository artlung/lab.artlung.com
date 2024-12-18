<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('How can I change every link on a page to something new?');
?>

    <script language="JavaScript" type="text/javascript">
        <!--

        var undo = new Array();
        /* ======================================= */
        /* this will change every link on the page */
        /* back to what they were                  */
        /* ======================================= */
        function changeAllTheLinksBack() {
            for (i = 0; i < undo.length; i++) {
                if (undo.length != 0)
                    document.links[i].href = undo[i];
            }
        }


        var newLinkURL = "http://WebSanDiego.org/"; // insert your URL
        /* ======================================= */
        /* this will change every link on the page */
        /* to whatever newLinkURL is               */
        /* ======================================= */
        function changeEveryDarnLink() {
            for (i = 0; i < document.links.length; i++) {
// this it to capture an undo!
                if (document.links[i].href != newLinkURL)
                    undo[i] = document.links[i].href;
                document.links[i].href = newLinkURL;
            }
        }

        //-->
    </script>


    ');

    ?>

    <h1>How can I change every link on a page to something new?</h1>

    <h2>Question:</h2>
    <blockquote> How can I change every link on a page to something new?</blockquote>

    <h2>Answer:</h2>
    <blockquote> Iterate through each element in the document.links[] array, and change the .href property.</blockquote>

    <pre>
&lt;script language="JavaScript" type="text/javascript"&gt;
&lt;!--
<b>var newLinkURL = "http://WebSanDiego.org/";</b> // insert your URL
/* ======================================= */
/* this will change every link on the page */
/* to whatever newLinkURL is               */
/* ======================================= */
<b>function changeEveryDarnLink () {</b>
<b>for (i=0; i&lt;document.links.length; i++) {
        document.links[i].href=newLinkURL;
        }</b>
<b>}</b>
//--&gt;
&lt;/script&gt;
</pre>
    <div align="center">
        <table border="0" cellspacing="1" cellpadding="20" width="500">
            <tr>
                <td bgcolor="#CCFF99">
                    <p>
                        <b>CLICK THE BUTTON AT RIGHT, THEN CHECK THESE LINKS:</b></p>
                    <ul>
                        <li><a href="http://www.google.com/" target="_blank">google</a></li>
                        <li><a href="http://www.avencom.com/" target="_blank">avencom</a></li>
                        <li><a href="http://www.salon.com/" target="_blank">salon</a></li>
                        <li><a href="http://www.webstandards.org/" target="_blank">webstandards.org</a></li>
                        <li><a href="http://www.metafilter.com/" target="_blank">metafilter</a></li>
                    </ul>
                </td>
                <td bgcolor="#99FF99">
                    <form action="./">
                        <input type=button onclick="changeEveryDarnLink()" value="Change All Links">
                    </form>

                    <form action="./">
                        <input type=button onclick="changeAllTheLinksBack()" value="Undo Link Change">
                    </form>
                </td>
            </tr>
        </table>
    </div>

    <p style="font-size: small;"><em><b>Note:</b> To get the undo feature on <strong>this</strong> page, I have some
            extra code, and a global array called "undo."</em></p>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
