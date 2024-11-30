<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('Random String in SQL');
?>

<p class="date-attribution">Created August 21 2000</p>

<h2>Random String in SQL</h2>

<p>Take a random number, and <a href="https://en.wikipedia.org/wiki/MD5" title="MD5 cryptographic hash algorithm">MD5</a> it!</p>

<pre>
<b>UPDATE `table` SET col = MD5(RAND()) WHERE condition=TRUE;</b>
</pre>


<?php
$lab->printFooter([
    'comments' => true
]);
