<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('Safari Mailto to Webmail');
?>

<h1>Safari Mailto Converter</h1>



<p>I do not <em>ever</em> want to use Mail.app on MacOS. It is not good.</p>

    <p>
        Safari used to support an extension called <code>mailto.safariextz</code>.
    </p>

<p>

That extension is no longer supported. The Internet Archive
has a copy of the website that hosted that extension:

<a href="https://web.archive.org/web/20201026190121/https://sites.google.com/site/mailtoextension/">sites.google.com/site/mailtoextension/</a>. If you can manage to get a copy of the binary extension, it fails to install.
</p>




<p>

My solution is a bookmarklet. It converts <a href="mailto:someone@example.com?subject=TEST%20SUBJECT&body=TEST%20BODY&bcc=someone.else@example.com">mailto</a> links on the page to links which
can open links in Gmail on the web. It's based on <a href="https://stackoverflow.com/a/8852679/63094">this StackOverflow Answer here</a>.
</em>
</p>

<p>This solution is specific for Gmail. It could be adapted for other webmail services.</p>


<h2>
    Drag the link below to your browser's toolbar... (Gmail)
</h2>
<div style="padding: 1rem;border: 3px double blue;text-align: center;font-size: 2rem;text-wrap: balance">


<?php
$javascript = file_get_contents('safari-mailto-webmail.js');
$bookmarklet_javascript = ArtlungLab\Bookmarklet::javascriptToBookmarklet($javascript);

printf('<a href="javascript:%s" class="bookmarklet">Convert mailto:</a>', $bookmarklet_javascript);
?>

</div>


    <hr>
    <h2>Source Code</h2>
<?php
$lab->printCodeBlock($javascript);
?>


<hr>
<h2>See Also</h2>

<ul>
    <li>
        <a href="https://support.mozilla.org/en-US/kb/change-program-used-open-email-links">
            Firefox allows for a mailto link to open in webmail
        </a>
    </li>
    <li>
        <a href="https://confluence.appstate.edu/display/ATKB/Setting+Gmail+to+be+the+Default+Email+Handler">
            Setting webmail for mailto links in Chrome
        </a>
    </li>
</ul>
<!--ff allows for a mailto link to open -->
<!--    https://support.mozilla.org/en-US/kb/change-program-used-open-email-links-->


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);


