<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('Dropdown Navigation in Frames');

?>


    <p class="date-attribution">Status: Archaic</p>

    <h1 class="p-name">Dropdown Navigation in Frames</h1>

    <h2>The question</h2>

    <blockquote>
        <p>

            I've tried to do this on my own, and even had GoLive Cyberstudio generate a
            'work-around' for me, but if i can reduce the amount of code THAT
            took and still achieve my goal, I'll be a happy camper.
        </p>
        <p>
            I have a two-frame set up that uses the right
            frame for navigation (rebellious-huh?) via 4 drop-down form menus
            with an onChange handler. <b>This replaces content in the left frame
                ok, but the last selected item remains in the menu list. I would
                like the new left frame to have some sort of onLoad to refresh
                the right frame, to reset, as it were, the menu lists.</b> My work
            around in golive involves reloading the right page from an
            'onLoad' in the left page, which does what I want, but unless I'm
            mistaken (have been before), it adds something like 70 lines of
            code to my page. I thought there must be a more compact way to do
            this?
        </p>
    </blockquote>

    <p>
        The solution involves setting the option selected to the first
        element (zero to javascript) -- [
        <em>document.formname.elementname.selectedIndex=0</em> ] -- see
        the code of the-navigation.php to see how I implement it. This
        page is related to my other <a href="/dropdown/"
                                       target="_top">JavaScript Navigation</a> Solutions.
    </p>


    <h2>Source Code for the Frameset</h2>

    <pre>
&lt;frameset rows="80%,20%"&gt;
    &lt;frame src="the-content.php" <b>name="targetWINDOW"</b>&gt;
    &lt;frame src="the-navigation.php"&gt;
&lt;/frameset&gt;
&lt;noframes&gt;&lt;a href="the-content.php"&gt;See The Code&lt;/a&gt;&lt;/noframes&gt;
</pre>

    <h2>Source Code for the Navigation</h2>

    <pre>
&lt;form action="../"&gt;
&lt;table border="0" cellspacing="0" cellpadding="8" width="95%" height="95%"&gt;
    &lt;tr&gt;&lt;td align="CENTER"&gt;
&lt;select 
    <b>onchange="window.open(this.options[this.selectedIndex].value,'targetWINDOW');this.selectedIndex=0;"</b>&gt;
    &lt;option&gt;Choose A Site&lt;/option&gt;
    &lt;option value="http://www.yahoo.com/"&gt;YAHOO&lt;/option&gt;
    &lt;option value="http://www.google.com/"&gt;GOOGLE&lt;/option&gt;
    &lt;option value="http://www.altavista.com/"&gt;ALTAVISTA&lt;/option&gt;
    &lt;option value="http://www.amazon.com/"&gt;AMAZON&lt;/option&gt;
    &lt;option value="https://artlung.com/"&gt;ARTLUNG&lt;/option&gt;
&lt;/select&gt;
    &lt;/td&gt;&lt;/tr&gt;
&lt;/table&gt;
&lt;/form&gt;
</pre>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
