<?php
require_once '../../loader.php';
$lab = new Lab();
$lab->printHeader(
    '
Forward and Back in JavaScript on an Imagemap 
'
);

?>

<p class="date-attribution">1999</p>
    <h1>Forward and Back in JavaScript on an ImageMap</h1>


    <table border="0" cellspacing="0" cellpadding="10" bgcolor="#000000">
        <tr>
            <td><img src="character_nav.gif" alt="" width="223" height="30" border="0" usemap="#Navigation"></td>
        </tr>
    </table>

    <map name="Navigation">
        <area shape="rect" alt="Previous" coords="0,0,112,30" href="javascript:history.go(-1)">
        <area shape="rect" alt="Next" coords="113,0,223,30" href="javascript:history.go(+1)">
    </map>


    <pre>
&lt;map <b>name="Navigation"&gt;</b>
    &lt;area shape="rect" alt="Previous" coords="0,0,112,30" <b>href="javascript:history.go(-1)"</b>&gt;
    &lt;area shape="rect" alt="Next" coords="113,0,223,30" <b>href="javascript:history.go(+1)"</b>&gt;
&lt;/map&gt;
</pre>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
