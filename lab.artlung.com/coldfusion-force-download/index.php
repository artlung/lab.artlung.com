<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
ColdFusion: Force Download of File
<?php include_once("../inc.header2of2.php"); ?>

<p align="right">Created before 2005, updated 2016</p>

<h1>ColdFusion: Force Download of File</h1> 

<p>I've used this in the past. It's dependent on the file actually existing on the filesystem in the &lt;path-to-file&gt; directory.</p>

<pre>
&lt;cfset yourFileName="whatever.csv"&gt;
&lt;cfcontent type="application/x-unknown"&gt;
&lt;cfheader name="Content-Disposition" value="attachment;filename=#yourFileName#"&gt;
&lt;cfheader name="Content-Description" value="This is a tab-delimited file.">
&lt;cflocation url="<b>&lt;path-to-file&gt;</b>/#yourFileName#"&gt;
</pre>

<p>From a reader named Joe Velez, in 2005 an improvement:</pre>

<pre>
&lt;cfset yourFileName="download.txt"&gt;
&lt;cfcontent type="application/x-unknown"&gt;
&lt;cfheader name="Content-Disposition" value="attachment;filename=#yourFileName#"&gt;
&lt;cfheader name="Content-Description" value="This is a tab- delimited file."&gt;
&lt;cfinclude template='#yourfilename#'&gt;
</pre>


<?php include_once("../inc.footer.php"); ?>

