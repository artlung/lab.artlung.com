<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader(
    '
Giving Users A Preference Widget for Opening New Windows
'
);

?>

    <p class="date-attribution">Created February 4, 2004</p>

    <h1>Giving Users A Preference Widget for Opening New Windows</h1>

    <h2>What brought that on?</h2>

    <p>I put up a new professional site for myself at <a href="http://joecrawford.com/">joecrawford.com</a> and decided
        since I wanted people to visit <i>several</i> of those links, and stay on the page, I would target them to
        "_blank", spawning new windows. I thought this was kind of a good thing, despite it being a no no I know about
        -- one person suggested I look at #2 of <a href="http://www.useit.com/alertbox/990530.html">The Top Ten New
            Mistakes of Web Design, 1999</a>: Opening New Browser Windows. But I'm obstinate, and knew that I liked it,
        and so did many of my visitors.
    </p>
    <p>
        Rather than deciding one way or another, because for me, and for some of my users, I wanted the option -- I
        decided to give the users a preference setting.
    </p>


    <h3>Here's the php page that sets the cookie: I call it "windowcookie.php" and put it at the site root.</h3>

    <blockquote class="src">
        <?php
        highlight_file("windowcookie.php")
        ?>
    </blockquote>

    <h3>I put this on the header of the page:</h3>
    <blockquote class="src">
        <?php
        highlight_file("putinhtmlheader.php")
        ?>
    </blockquote>

    <h3>And this is the PHP code in-line on the page to let people see and change the setting:</h3>
    <blockquote class="src">
        <?php
        highlight_file("linkpreference.php")
        ?>
    </blockquote>


    <p>I hope this has been helpful. <a href="https://artlung.com/feedback/">Send a comment or a suggestion</a>.</p>

    <p> - <a href="https://artlung.com/">Joe Crawford</a></p>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
