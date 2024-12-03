<?php
require_once '../../loader.php';
$lab = new Lab();
$lab->printHeader(
    '
How to make .php files masquerade as .php3
'
);

?>
    <p class="date-attribution">Created September 4, 2001</p>

    <h1>How to make .php files masquerade as .php3</h1>

    <p>On <a href="http://evolt.org/">evolt.org</a>'s <a
                href="http://lists.evolt.org/">thelist</a> it was asked by
        <a href="http://muinar.com/">muinar</a>:</p>

    <blockquote>
        I switched to a new server which has php4 installed instead
        of the old php3. I renamed all the pages and links to .php
        (The old version needed the filename ending php3)
        <br><br>
        Now when a visitor uses an old bookmark which ends with .php3,
        he will get a 404 error. Is there a way to rewrite or redirect
        users to the according php page? If this can be done with
        mod_rewrite in Apache, I'd appreciate any hints.
    </blockquote>

    <p><B>And the Answer:</b></p>

    <p>How about this - put this in an .htaccess file at your root level
        directory.</p>

    <pre>
#HOW TO MAKE .php FILES MASQUERADE AS .php3
<b>RewriteEngine On
RewriteRule  ^(.+).php3 $1.php</b>
</pre>

    <p>Now, everytime Apache sees php3, it will make believe that it's really php. This will also propagate to child
        directories.</p>

    <p>It's a very simple solution, though I'm not sure it's the best solution performance-wise. Also, playing with
        mod_rewrite is always a bit scary, make sure you leave yourself an undo and test it. You can easily make things
        which break spectacularly.</p>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);



