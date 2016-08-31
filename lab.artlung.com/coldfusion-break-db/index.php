<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
Ways to break a lock on an Access Database with Cold Fusion
<?php include_once("../inc.header2of2.php"); ?>

<p align="right">Created March 2003.</p>

<h1>Ways to break a lock on an Access Database with Cold Fusion</h1>

<h2>CFUSION_DBCONNECTIONS_FLUSH()</h2>

<pre>&lt;cfset temp = cfusion_dbconnections_flush()&gt;</pre>

<h2>UPLOAD A NEW DATABASE ENTIRELY</h2>

Or you could upload the database with a new name and change the ODBC
connection to point to the new file.

<h2>A BOGUS QUERY</h2>

<pre>
  &lt;CFQUERY name="bogusQuery" datasource="#DataSource#"&gt;
    SELECT   bogusField
    FROM   bogusTable
    ORDER BY  bogusField ASC
  &lt;/CFQUERY&gt;
</pre>


<?php include_once("../inc.footer.php"); ?>


