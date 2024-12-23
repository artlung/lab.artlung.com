<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$metadata = Spyc::YAMLLoad(__DIR__ . '/webmentions.yaml');
$lab->printHeader($metadata['title']);
?>


<p class="date-attribution">Created December 2024</p>

<h1>Webmentions</h1>
<p><em>A brief-ish introduction to the idea of a webmention!</em></p>

<hr />

<h2>What is a webmention?</h2>

    <p>Webmentions are a way for one web page to tell another web page that they have linked to them.</p>

    <h2>So here's two pages, <span class="source">one</span> linked to <span class="target">the other</span>.</h2>

<div class="diagram">
    <figure class="webmention source">
        <img src="smorgasborg-artlung-com-douglasadams-Small.jpeg" alt="Screenshot of https://smorgasborg.artlung.com/douglasadams/">
    </figure>

    <figure class="arrow">→</figure>

    <figure class="webmention target">
        <img src="artlung-com-blog-2016-10-06-audio-packrattitude-Small.jpeg" alt="Screenshot of https://artlung.com/blog/2016/10/06/audio-packrattitude/">

    </figure>

</div>

<p>You could say that a
    <span class="source">source</span> page has linked to a
    <span class="target">target</span> page. For the <span class="source">source</span> page
    to tell the <span class="target">target</span> page about the link. It can send a webmention.
    To do <em>that</em>, it needs to know if there's an <span class="endpoint">endpoint</span> to send the webmention <em>to</em>.
</p>

<hr />

<h2>Is there an endpoint?</h2>

<p>If the <span class="target">second page</span> indicates in its source code that it can receive
    webmentions, it usually will include an HTML <code>&lt;link&gt;</code> tag with an attribute of <code>rel="webmention"</code>.
    In this case, the <a href="https://wordpress.org/plugins/webmention/">WordPress Webmention plugin</a> has added it.
    Some of what this page describes is all automated by content management systems like WordPress.
</p>
<p>
    <strong>BUT!</strong>&mdash;you don't have to run a CMS to receive webmentions.
    Any plain HTML page can receive a webmention. To let people know you can receive them, you add a <code>&lt;link&gt;</code> tag.
</p>

    <p><em>For example:</em></p>

    <pre><code class="target">&lt;link rel="webmention" href="<span class="endpoint" contenteditable="true">https://artlung.com/wp-json/webmention/1.0/endpoint</span>" /&gt;</code></pre>

    <p><em>Link tags are meant to be in the <code>&lt;head&gt;</code> of an HTML page. Invisible.

    I usually use Brent Lineberry's <em>Supports Webmentions?</em> bookmarklet. <a href="https://orangegnome.com/posts/2929/supports-webmentions-bookmarklet" title="Supports Webmentions? bookmarklet">Read about it here</a></em></p>



    <div class="diagram">

        <figure class="webmention target">
            <img src="artlung-com-blog-2016-10-06-audio-packrattitude-Small.jpeg" alt="Screenshot of https://artlung.com/blog/2016/10/06/audio-packrattitude/">
            <figcaption>&lt;link rel="webmention" href="<span class="endpoint">https://art...</span>"&gt;</figcaption>
        </figure>

    </div>





    <hr />

<h2>Okay, so how do I send the message?</h2>

    <div class="diagram">
        <figure class="webmention source">
            <img src="smorgasborg-artlung-com-douglasadams-Small.jpeg" alt="Screenshot of https://smorgasborg.artlung.com/douglasadams/">
            <figcaption>Somebody responsible for this page has to send it!</figcaption>
        </figure>

        <figure class="arrow source">→</figure>

        <figure class="webmention target">
            <img src="artlung-com-blog-2016-10-06-audio-packrattitude-Small.jpeg" alt="Screenshot of https://artlung.com/blog/2016/10/06/audio-packrattitude/">
            <figcaption>&lt;link rel="webmention" href="<span class="endpoint">https://art...</span>"&gt;</figcaption>
        </figure>

    </div>

<hr />

<h2>One way is with "curl"</h2>

<p>Curl is a command line tool to call web pages.
    "Console" programs can be intimidating. But this one is
    not so different from a web form. <a href="#skip-to-web-form"><em>...Skip to the web form</em></a>
</p>


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
        <p class="long">
        In this case it would transmit to the endpoint: <code class="endpoint" contenteditable="true">https://artlung.com/wp-json/webmention/1.0/endpoint</code></p>

<hr />

    <h2 id="skip-to-web-form">HTML form version of the curl command:</h2>

<p>This form, when submitted, does the same thing, minus the request for detailed headers:</p>

    <pre><code>&lt;form action="<code class="endpoint" contenteditable="true">https://artlung.com/wp-json/webmention/1.0/endpoint</code>" method="get"&gt;
    &lt;input type="url" name="source" value="<code class="source" contenteditable="true">https://smorgasborg.artlung.com/douglasadams/</code>"&gt;
    &lt;input type="url" name="target" value="<code class="target" contenteditable="true">https://artlung.com/blog/2016/10/06/audio-packrattitude/</code>"&gt;
    &lt;input type="submit" value="Send Webmention"&gt;
&lt;/form&gt;</code></pre>


<hr />

<h2>Okay, I'm ready to run the curl command...</h2>

<pre><code>
&gt;&gt;&gt; curl -i -d "source=<code class="source" contenteditable="true">https://smorgasborg.artlung.com/douglasadams/</code>&target=<code class="target" contenteditable="true">https://artlung.com/blog/2016/10/06/audio-packrattitude/</code>" \
<code class="endpoint" contenteditable="true">https://artlung.com/wp-json/webmention/1.0/endpoint</code>

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

<p>That bit in the code where it says <b><em>"Webmention was successful"</em></b> means it worked!

    The <span class="endpoint">endpoint</span> accepted
the webmention. It's important to know that the page doesn't have to display the webmention, but they <em>could</em>, or <em>may</em> in the future.
    That's a decision that the person responsible for the <span class="target">target</span> page makes.
</p>

<p>
    Webmentions can communicate <em>more</em> than linking. By adding <a href="https://indieweb.org/microformats">microformats</a> to the <span class="source">source</span> page's link,,
    <a href="https://indieweb.org/likes">likes</a>,
    <a href="https://indieweb.org/mentions">mentions</a>,
    <a href="https://indieweb.org/replies">replies</a> and
    <a href="https://indieweb.org/reposts">reposts</a> can be sent.
</p>

<p>
    Thanks for reading. If you have questions feel free to leave a comment below using the Disqus comment system.

    You could also send an email to <code><a href="mailto:joe@artlung.com">joe@artlung.com</a></code> if you have any questions or suggestions.

</p>

<hr />

<h2>Further Reading</h2>

<ul>
    <li>
        <a href="https://indieweb.org/Webmention">Webmentions</a> on the <a href="http://indieweb.org">IndieWeb</a> wiki. This page goes into great detail

        on how they work, and how different systems support and send them in an automated fashion.

    </li>
    <li>
        <a href="https://webmention.io/">webmention.io</a> is a service that you set up and use to receive webmentions on any page.
    </li>
    <li>
        <a href="https://webmention.rocks/">webmention.rocks</a> is a test suite for webmentions.
    </li>
    <li>
        <a href="https://www.w3.org/TR/webmention/">W3C Webmention Specification</a>
    </li>

    <li>
        <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/link">MDN Web Docs: &lt;link&gt;</a>
    </li>

    <li>
        <a href="https://curl.se/">curl</a> is a command line tool and library for making HTTP calls.
    </li>

    <li>
        <a href="https://en.wikipedia.org/wiki/Webmention">Wikipedia: Webmention</a>
    </li>
    <li>
        <a
            href="https://indiewebify.me/">IndieWebify.me</a>
    </li>

</ul>

<h2>Also</h2>

    <p><em>You can edit the example code of the <span class="source">source</span>, <span class="target">target</span>, and <span class="endpoint">endpoint</span> urls in this page if your browser supports the <code>contenteditable</code> attribute.</em></p>







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


