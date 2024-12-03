<?php
require_once '../../loader.php';
$lab = new Lab();
$lab->printHeader(
    '
Make a Unique ID in PHP
'
);

?>

    <p class="date-attribution">From December 2005</p>

    <h1>Make a Unique ID in PHP</h1>

    <p>
        Use random numbers to create some random characters, and then use the time and a unique id to make a unique id.

        Similar to the way a GUID is created in Windows.
    </p>

    <h2>Results</h2>

    <pre><?php

        // Just a small sample of making a unique id in PHP
        // https://www.php.net/manual/en/function.chr.php
        // https://www.php.net/manual/en/function.rand.php
        // https://www.php.net/manual/en/function.time.php
        // https://www.php.net/manual/en/function.uniqid.php

        $prefix = 'W'; // a universal prefix prefix
        $my_random_id = $prefix;
        $my_random_id .= chr(rand(65, 90));
        $my_random_id .= time();
        $my_random_id .= uniqid($prefix);
        print $my_random_id;
    ?></pre>

    <h2>...And the Source Code:</h2>

    <pre>
&lt;?php
// Just a small sample of making a unique id in PHP
// <a href="https://www.php.net/manual/en/function.chr.php">https://www.php.net/manual/en/function.chr.php</a>
// <a href="https://www.php.net/manual/en/function.rand.php">https://www.php.net/manual/en/function.rand.php</a>
// <a href="https://www.php.net/manual/en/function.time.php">http://www.php.net/manual/en/function.time.php</a>
// <a href="http://www.php.net/manual/en/function.uniqid.php">http://www.php.net/manual/en/function.uniqid.php</a>

<b>    $prefix = 'W'; // a universal prefix prefix
    $my_random_id = $prefix;
    $my_random_id .= chr(rand(65,90));
    $my_random_id .= time();
    $my_random_id .= uniqid($prefix);
    print $my_random_id;</b>
?&gt;
</pre>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
