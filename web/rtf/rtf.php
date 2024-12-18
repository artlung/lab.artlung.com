<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader(
    'Make an RTF Document with PHP'
);

?>
    <p class="date-attribution">
        Created: April 2001. Updated December 2001, February 2004, December 2024.
    </p>
    <h1>Make an RTF Document with PHP</h1>

    <?php ob_start(); ?>



    <form action="./rtf.rtf" method="post" class="example">
        <h2>Create RTF Document:</h2>
        <label><span>Enter your name:      </span><input type="text" name="name" required></label>
        <label><span>Enter your last name: </span><input type="text" name="lastname" required></label>
        <label><span>Enter your address:   </span><input type="text" name="address" required></label>
        <label><span>Enter your city:      </span><input type="text" name="city" required></label>
        <label><span>Enter your state:     </span><input type="text" name="state" required></label>
        <label><span>Enter your zip:       </span><input type="text" name="zip" required></label>
        <input type="submit" value="Submit">
    </form>
    <?php $html = ob_get_clean(); ?>
<?php echo $html; ?>
    <p>
        <b>NOTE:</b> I didn't do any magic here, I just modified the ideas at <a href="https://www.irt.org/">irt.org</a>
        on <a href="https://web.archive.org/web/20050306100434/https://tech.irt.org/articles/js154/">producing RTF files with Cold Fusion</a>
    </p>
    <p>
        <i><b>Update 1/2002:</b> Matthew Walden had some issues getting this to work under <abbr
                    title="Microsoft Internet Information Server">IIS</abbr> and Apache. His comments may be helpful.
            Thanks Matthew!</i>
    </p>
    <blockquote>
        <p>

        I had problems getting apache and MS IIS working with RTF documents. I fixed apache by adding the following line
        into <code>httpd.conf</code> :
        </p>
        <pre><code>AddType application/x-httpd-php .rtf</code></pre>
        <p>
        IIS has a slightly more long-winded solution:
        </p>
        <p>
        In the management console, under the properties for the virtual (or default) web in the home directory, go to
        home directory | application settings | configuration. Click on "Add" and enter the path to the php.exe as it is
        set for .php files. (For me this was <code>C:\PHP\php.exe "%s" "%s"</code>). Type .rtf as the extension and press OK.
        </p>
        <p>
        The web / web service may need to be restarted for the changes to be reflected.
        </p>
    </blockquote>
<p>
    And on changing <code>textarea</code> type documents so that the newlines propagate to the RTF file, I got this feedback:
</p>

<blockquote>

    <pre><code><b>&lt;?print print str_replace('&lt;br /&gt;', '\line',nl2br(StripSlashes($_POST['address'])))?&gt; </b></code></pre>

        <p>That works because in the text based format of RTF, <code>\line</code> is the code that forces a newline.</p>

</blockquote>

<p>    Thanks to Mariusz for this feedback!
</p>

<hr />

    <h2>HTML Form</h2>

    <pre><code><?php echo htmlentities($html); ?></code></pre>

    <h2>rtf.rtf</h2>

    <pre><code><?php echo htmlentities(file_get_contents('rtf.rtf')); ?></code></pre>

    <h2>.htaccess</h2>

<pre><code><?php echo htmlentities(file_get_contents('.htaccess')); ?></code></pre>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
