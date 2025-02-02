<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('ColdFusion: Force Download of File');

?>

    <p class="date-attribution">Created before 2005, updated 2016</p>

    <h1>ColdFusion: Force Download of File</h1>

    <p>I've used this in the past. It's dependent on the file actually existing on the filesystem in the &lt;path-to-file&gt;
        directory.</p>

    <pre>
&lt;cfset yourFileName="whatever.csv"&gt;
&lt;cfcontent type="application/x-unknown"&gt;
&lt;cfheader name="Content-Disposition" value="attachment;filename=#yourFileName#"&gt;
&lt;cfheader name="Content-Description" value="This is a tab-delimited file.">
&lt;cflocation url="<b>&lt;path-to-file&gt;</b>/#yourFileName#"&gt;
</pre>

    <p>From a reader named Joe Velez, in 2005 an improvement:</p>

    <pre>
&lt;cfset yourFileName="download.txt"&gt;
&lt;cfcontent type="application/x-unknown"&gt;
&lt;cfheader name="Content-Disposition" value="attachment;filename=#yourFileName#"&gt;
&lt;cfheader name="Content-Description" value="This is a tab- delimited file."&gt;
&lt;cfinclude template='#yourfilename#'&gt;
</pre>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
