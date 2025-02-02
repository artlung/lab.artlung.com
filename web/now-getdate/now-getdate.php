<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader(
    '
NOW() ~= GETDATE()
'
);

?>


    <h1 class="p-name">NOW() ~= GETDATE()</h1>

    <pre>
--SQL SERVER <a href="https://msdn.microsoft.com/en-us/library/ms188383.aspx">https://msdn.microsoft.com/en-us/library/ms188383.aspx</a>
SELECT GETDATE()
2006-08-15 12:16:05.050
 
--MySQL <a href="https://dev.mysql.com/doc/refman/5.5/en/date-and-time-functions.html#function_now">https://dev.mysql.com/doc/refman/5.5/en/date-and-time-functions.html#function_now</a>
SELECT NOW()
2006-04-12 13:47:36
</pre>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
