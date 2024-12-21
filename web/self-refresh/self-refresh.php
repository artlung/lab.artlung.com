<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader(
    '
Page Self-Refresh
'
);

?>

    <h1 class="p-name">Code to make a page that refresh to itself</h1>

    <pre>
&lt;script language="JavaScript" type="text/javascript"&gt;
&lt;!--
<b>var howManyMinutes = 2;</b> // set your interval here;
<b>var oneMinute = 60000;</b>  // 1 minute = 60,000 milliseconds;
<b>refreshFreq = oneMinute * howManyMinutes;</b>
<b>WhereNext = location.href;
setTimeout("window.open(WhereNext,'_top');",refreshFreq);</b>
//--&gt;
&lt;/script&gt;
</pre>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
