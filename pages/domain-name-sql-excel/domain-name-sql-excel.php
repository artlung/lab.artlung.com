<?php
require_once __DIR__ . '/../../loader.php';
$lab = new Lab();
$lab->printHeader(
    '
Extract Domain Names from a list of email addresses
'
);

?>
    <p class="date-attribution">Created September 2016, originally like 2005.</p>

    <h2>
        Extract Domain Names from a list of email addresses
    </h2>

    <h3>In SQL!</h3>

    <pre>
SELECT count( * ) AS MyDomainCount
       , substring( user_email, LOCATE( '@', user_email ) ) AS MyDomain
FROM   `tp_users`
GROUP BY substring( user_email, LOCATE( '@', user_email ) );
</pre>


    <h4>In Excel!</h4>
    <pre>
=MID(A1,(FIND("@",A1)+1),200)
</pre>

    <h4>I don't remember writing these!</h4>

    <pre>
SELECT SUBSTRING_INDEX(email,'@',-1) AS domain FROM TABLE -- returns everything to the right of the rightmost @

SELECT SUBSTRING(email,INSTR(email,'@')+1) AS domain FROM TABLE -- returns everything to the right of the leftmost @
</pre>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
