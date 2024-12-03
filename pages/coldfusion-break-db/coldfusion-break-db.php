<?php
require_once '../../loader.php';
$lab = new Lab();
$lab->printHeader(
    '
Ways to break a lock on an Access Database with Cold Fusion
'
);

?>

    <p class="date-attribution">Created March 2003.</p>

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


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
