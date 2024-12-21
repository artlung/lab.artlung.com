<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader(
    '
onunload + window.open = evil
'
);

?>

    <p class="date-attribution">Created 12/2001</p>

    <h1 class="p-name">onunload + window.open = evil</h1>

    <p>I was asked recently how the sites that that open windows when you close them do it?
        And the answer is that the authors of those sites have no hearts or brains. Well, actually, they do it
        by using the onunload event handler and the open() method of the window object.</p>

    <p>It's a noxious combination.</p>

    <p>Spend some time with the following demonstration, won't you?</p>

    <ol>
        <li>Open your text editor (Notepad or emacs or SimpleText)</li>
        <li>Select and copy the source cde below</li>
        <li>Save the document as <b>onunload.htm</b></li>
        <li>Load it into a browser</li>
        <li>Experience the pleasure</li>
    </ol>

    <p>After a while of playing whack-a-mole with the windows
        you will understand that opening
        windows onunload is a nasty idea. Leave it for the porn
        sites. With great power comes great responsibility, Kal-El.</p>

    <p><b>Source Code:</b></p>
    <pre>
&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
        "https://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd"&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;window.open and onunload used together are evil&lt;/title&gt;
&lt;/head&gt;
&lt;body <b id="b">onunload="window.open('onunload.htm')"</b>&gt;

&lt;h1&gt;Wow, this is annoying.&lt;/h1&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
