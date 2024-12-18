<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('Undocumented Linklint JavaScript Feature');

?>

    <p class="date-attribution">Created 19 December 2002</p>

    <h1>Undocumented Linklint JavaScript Feature</h1>

    <p>I really like linklint, a perl based webtool that allows you to do linkchecks on a website. You can get and read
        about it at <a href="http://linklint.org/">linklint.org</a></p>

    <p>Some time back I asked the main guy, James B. Bowlin about support for checking javascript urls, and his reply
        was this:</p>

    <pre>
    --------------------------------------------------------------------
    Linklint + JavaScript
    Thank you for the praise.
    
    LinkLint does have some rudimentary JavaScript support but it is
    undocumented (I'm lazy).   On the LinkLint command line you can say:
    
        -javascript  "SomeFunction(,,url)"
    
    This tells LinkLint to treat the third parameter in the SomeFunction()
    JavaScript function as a URL.  Only one URL is allowed per function
    but you can have more than one function.   
    
    LinkLint does not understand JavaScript, it just looks for the things
    that look like the functions you give it prototypes for.
    
    HTH -- Jim Bowlin
    --------------------------------------------------------------------
</pre>

    <p>So for those of you who may be curious about JS and linklint, hope this was helpful. And Jim, THANKS FOR THE
        REPLY!</p>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
 
