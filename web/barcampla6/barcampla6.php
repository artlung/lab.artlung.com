<html>
<head>
    <title>jQuery Introduction @ BarCampLA6</title>
    <link rel="stylesheet" href="barcampla6.css<?php
    echo "?" . filectime('barcampla6.css');
    ?>" type="text/css"/>
    <!--
    download the latest jQuery from http://docs.jquery.com/Downloading_jQuery#Download_jQuery
    -->
    <script type="text/javascript" src="jquery-1.2.6.min.js"></script>
    <script type="text/javascript" src="barcampla6.js<?php
    echo "?" . filectime('barcampla6.js');
    ?>"></script>
    <link rel="webmention" href="https://webmention.io/artlung.com/webmention"/>
    <script src="/2025.js<?php
    echo '?' . filemtime('../2025.js');
    ?>"></script>
</head>
<body>

<div id="wrapper">
    <div id="header">
        <h1>jQuery Basics</h1>
        <a href="https://lab.artlung.com/barcampla6/">https://lab.artlung.com/barcampla6/</a>
        <form action=".">
            <input type="button" id="buttonA" value="."/>
            <input type="button" id="buttonB" value=".."/>
            <input type="button" id="buttonC" value="..."/>
            <input type="button" id="buttonD" value="...."/>
            <input type="button" id="buttonE" value="....."/>
        </form>
    </div><!--#header-->
    <div id="pagebody">
        <h2>The Gettysburg Address</h2>
        <img src="images/lincoln.jpg" alt="Abraham Lincoln"/>
        <p>Four score and seven years ago our fathers brought forth
            on this continent, a new nation, conceived in
            <a href="http://en.wikipedia.org/wiki/Liberty">Liberty</a>,
            and dedicated to the proposition that all men are created
            equal.
        </p>
        <p>Now we are engaged in a great civil war, testing whether
            that nation, or any nation so conceived and so dedicated,
            can long endure. We are met on a great battle-field of
            that war. We have come to dedicate a portion of that
            field, as a final resting place for those who here gave
            their lives that that nation might live. It is altogether
            fitting and proper that we should do this.
        </p>
        <p>But, in a larger sense, we can not dedicate&mdash;we can not
            consecrate&mdash;we can not hallow&mdash;this ground. The
            brave men, living and dead, who struggled here, have
            consecrated it, far above our poor power to add or
            detract. The world will little note, nor long remember
            what we say here, but it can never forget what they did
            here. It is for us the living, rather, to be dedicated
            here to the unfinished work which they who fought here
            have thus far so nobly advanced. It is rather for us to
            be here dedicated to the great task remaining before us
            &mdash;that from these honored dead we take increased
            devotion to that cause for which they gave the last full
            measure of devotion&mdash;that we here highly resolve that
            these dead shall not have died in vain&mdash;that this
            nation, under God, shall have a new birth of
            freedom&mdash;and that government of the people, by the
            people, for the people, shall not perish from the earth.
        </p>
        <p><cite>Abraham Lincoln</cite>, Gettysburg, Pennsylvania,
            <span class="date">November 19, 1863</span>
            <a href="https://web.archive.org/web/20090419212300/http://www.pbs.org/newshour/extra/teachers/lessonplans/media/clock_gettysburg_9-3.pdf">Download
                PDF of Gettysburg Address</a>
        </p>
        <hr/>
        <a href="source.php" class="button">Selected Source Code For This Page</a>
    </div><!--#pagebody-->
    <div id="footer">
        <p>
            <img src="images/joe-crawford.jpg" alt="Joe Crawford"/>
            Being an introduction to <a href="http://jquery.com/">jQuery</a>
            by <a href="https://artlung.com/">Joe Crawford</a></a>, email
            <a href="mailto:joe@artlung.com">joe@artlung.com</a>
            on 26 October 2008 at BarCampLA6
        </p>
    </div><!--#footer-->
</div><!--#wrapper-->
</body>
</html>
