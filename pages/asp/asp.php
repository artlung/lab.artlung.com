<?php
require_once '../../loader.php';
$lab = new Lab();
$lab->printHeader('ASP "Hello World Script"');
?>

    <p class="date-attribution">Created August 2001</p>

    <h1>ASP "Hello World Script"</h1>

    <pre><b>&lt;% Response.Write("Hello World!") %&gt;</b></pre>


<?php
$lab->printFooter(
    [
        'comments' => true,
    ]
);
