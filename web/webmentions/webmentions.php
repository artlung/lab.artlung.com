<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$metadata = Spyc::YAMLLoad(__DIR__ . '/webmentions.yaml');
$lab->printHeader($metadata['title']);
?>


<p class="date-attribution">Created December 2024</p>

<h1>Webmentions</h1>


<h2>What is a webmention?</h2>

    <p>Webmentions are a way for one website to tell another website that they have linked to them. Like comments, sort of.</p>

    <h2>So here's two pages, <span class="source">one</span> linked to <span class="target">the other</span>.</h2>

<div class="diagram">
    <div class="webmention source">
        <img src="smorgasborg-artlung-com-douglasadams-Small.jpeg" alt="Screenshot of https://smorgasborg.artlung.com/douglasadams/">
    </div>

    <div class="webmention target">
        <img src="artlung-com-blog-2016-10-06-audio-packrattitude-Small.jpeg" alt="Screenshot of https://artlung.com/blog/2016/10/06/audio-packrattitude/">

    </div>

</div>

<p>You could say that the
    <span class="source">source</span> page has linked to the
    <span class="target">target</span> page.
</p>

<h2>Is there a webmention endpoint?</h2>

<p>If the <span class="target">second page</span> indicates in its source code that it can receive
    webmentions, it usually will include an HTML <code>&lt;link&gt;</code> tag with an attribute of <code>rel="webmention"</code>. Like this:</p>


<pre><code class="target">&lt;link rel="webmention" href="<span class="endpoint" contenteditable="true">https://artlung.com/wp-json/webmention/1.0/endpoint</span>" /&gt;</code></pre>

<p>In this case, the <a href="https://wordpress.org/plugins/webmention/">WordPress Webmention plugin has added that code to the page</a>.</p>

<p><em>I often use Brent Lineberry's <a href="https://orangegnome.com/posts/2929/supports-webmentions-bookmarklet/">Webmentions bookmarklet</a> to check to see if a page can get webmentions.</em></p>



<h2>Send a webmention manually</h2>

<p>So let's say I want to send that webmention. I'll use curl to send it.</p>


    <pre><code>curl -i -d "source=<code class="source" contenteditable="true">https://smorgasborg.artlung.com/douglasadams/</code>&target=<code class="target" contenteditable="true">https://artlung.com/blog/2016/10/06/audio-packrattitude/</code>" \
<code class="endpoint" contenteditable="true">https://artlung.com/wp-json/webmention/1.0/endpoint</code></code></pre>

    <p>    That curl command has some options:</p>
    <ul>
        <li>
            <b><code>-i</code></b> is what makes the command give back very detailed request headers.
        </li>
        <li>
            <b><code>-d</code></b> is the parameter that indicates the payload. A querystring that
            includes the <code>source</code> and <code>target</code> urls.
        </li>
    </ul>

    <p>
        The final part of the curl command is the url of the site that can receive the webmention.
        GET requests are mostly what we are making when we click links.
    </p>
        <p>
        In this case it goes to the endpoint: <code class="endpoint" contenteditable="true">https://artlung.com/wp-json/webmention/1.0/endpoint</code></p>

    <h2>curl is another way to send the following HTML form</h2>

    <pre><code>&lt;form action="<code class="endpoint" contenteditable="true">https://artlung.com/wp-json/webmention/1.0/endpoint</code>" method="get"&gt;
    &lt;input type="url" name="source" value="<code class="source" contenteditable="true">https://smorgasborg.artlung.com/douglasadams/</code>"&gt;
    &lt;input type="url" name="target" value="<code class="target" contenteditable="true">https://artlung.com/blog/2016/10/06/audio-packrattitude/</code>"&gt;
    &lt;input type="submit" value="Send Webmention"&gt;
&lt;/form&gt;</code></pre>

<p><em>Also, you can click and edit the urls in this page if your browser supports the <code>contenteditable</code> attribute.</em></p>

<hr />

<h2>The results</h2>

<pre><code>
&gt;&gt;&gt; curl -i -d "source=<code class="source">https://smorgasborg.artlung.com/douglasadams/</code>&target=<code class="target">https://artlung.com/blog/2016/10/06/audio-packrattitude/</code>" \
<code class="endpoint">https://artlung.com/wp-json/webmention/1.0/endpoint</code>

HTTP/2 200
vary: Accept-Encoding,Cookie
x-robots-tag: noindex
link: &lt;https://artlung.com/wp-json/&gt; rel="https://api.w.org/"
x-content-type-options: nosniff
access-control-expose-headers: X-WP-Total, X-WP-TotalPages, Link
access-control-allow-headers: Authorization, X-WP-Nonce, Content-Disposition, Content-MD5, Content-Type
allow: POST, GET
content-type: application/json; charset=UTF-8
date: Wed, 18 Dec 2024 01:15:49 GMT
server: Apache
{
    "link": "<code class="source">https:\/\/smorgasborg.artlung.com\/douglasadams\/</code>",
    "source": "<code class="source">https:\/\/smorgasborg.artlung.com\/douglasadams\/</code>",
    "target": "<code class="target">https:\/\/artlung.com\/blog\/2016\/10\/06\/audio-packrattitude\/</code>",
    "code": "success",
    "message": "Webmention was successful"
}</code></pre>

<hr />

<h2>Further Reading</h2>

<ul>
    <li>
        <a href="https://indieweb.org/Webmention">Webmentions</a> on the <a href="http://indieweb.org">IndieWeb</a> wiki.
    </li>
    <li>
        <a href="https://webmention.io/">webmention.io</a> is a service that you set up and use to receive webmentions on any page.
    </li>
    <li>
        <a href="https://webmention.rocks/">webmention.rocks</a> is a test suite for webmentions.
    </li>
    <!-- https://www.w3.org/TR/webmention/ -->
    <li>
        <a href="https://www.w3.org/TR/webmention/">W3C Webmention Specification</a>
    </li>

</ul>








    <link rel="stylesheet" href="webmentions.css<?php
    echo '?v=' . filemtime('webmentions.css');
    ?>" type="text/css"/>

    <script src="webmentions.js<?php
    echo '?v=' . filemtime('webmentions.js');
    ?>"></script>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);


