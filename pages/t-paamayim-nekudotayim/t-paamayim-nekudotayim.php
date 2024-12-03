<?php
require_once '../../loader.php';
$lab = new Lab();
$lab->printHeader(
    '
syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM

'
);

?>
    <p class="date-attribution">Created September 2016, originally like 2008.</p>

    <h2>
        <code>syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM</code>
    </h2>

    <p><code>Parse error: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM in
            /var/www/vhosts/intranet.example.com/httpdocs/track/users.php on line 7
        </code></p>

    <h3>
        What generates this? It's PHP Code that is like this:
    </h3>

    <pre><code>$unit = $BUM::HOURS;</code>
</pre>

    <h3>
        ...
        when it should be like this:
    </h3>

    <pre><code>$unit = $BUM::$HOURS;</code></pre>

    <p>See <a href="https://www.php.net/manual/en/tokens.php">Tokens</a> in the PHP documentation. <b>T_PAAMAYIM_NEKUDOTAYIM</b>
        is also known as <b>T_DOUBLE_COLON</b>.


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
