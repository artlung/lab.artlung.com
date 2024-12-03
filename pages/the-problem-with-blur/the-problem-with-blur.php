<?php
require_once __DIR__ . '/../../loader.php';
$lab = new Lab();
$lab->printHeader(
    '
Why not to use blur() to make dotted lines go away in MSIE for Windows
'
);

?>

    <p class="date-attribution">Created July 20, 2001</p>
    <h1>
        Why not to use blur() to
        make dotted lines go away in
        <abbr title="Microsoft Internet Explorer">MSIE</abbr> for Windows
    </h1>

    <h2>
        <a href="#1111111111">first link</a> |
        <a href="#2222222222">second link</a> |
        <a href="#3333333333" onfocus="this.blur()">third link</a> |
        <a href="#4444444444">fourth link</a> |
        <a href="#5555555555">fifth link</a>
    </h2>

    <p>You <b>should be able</b> to tab from the first, to the second,
        to the third, then to the fourth link. However, if you use the blur()
        technique to "take the dotted lines off" of a link, you interfere with
        the tabbing of a web page.
    </p><p>
    This is demonstrated by the third link, it has an attribute of</p>
    <pre>
        &lt;a href="#1111111111"&gt;first link&lt;/a&gt; |
        &lt;a href="#2222222222"&gt;second link&lt;/a&gt; |
        &lt;a href="#3333333333" <b>onfocus="this.blur()"</b>&gt;third link&lt;/a&gt; |
        &lt;a href="#4444444444"&gt;fourth link&lt;/a&gt; |
        &lt;a href="#5555555555"&gt;fifth link&lt;/a&gt;
</pre>
    <p>Because of this, a user is prevented from tabbing to the fourth link.
        In addressing a cosmetic issue (legitimate), you have simultaneously broken
        the site for anyone who doesn't, or can't, use a mouse.
    </p>
    <p>Something to consider.</p>

    <p><i><b>Note:</b> This is separate from the ability to provide <a href="/lab/css/a-outline-none/">outline: none</a>
            to certain browsers.</i></p>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
