<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('What CSS class names are semantically meaningful?');

?>


    <p class="date-attribution">Created October 27, 2008. Minor updates 2024.</p>

    <h1>What CSS class names are semantically meaningful?</h1>


    <h2>
        <code>

            notranslate
        </code>
    </h2>

    <p>
        To tell Google Translate not to translate part of your page, use this class. <a
                href="http://googlewebmastercentral.blogspot.com/2008/10/helping-you-break-language-barrier.html">Helping
            you break the language barrier</a>
    </p>

    <h2>
        <code>
            robots-nocontent
        </code>
    </h2>
    <p>
        To tell the Yahoo crawling robot to not crawl content, you could use "robots-nocontent." But of course Yahoo! is
        not in the search business anymore. <a href="/robots-nocontent/">How do I mark web page content that is
            extraneous to the main unique content on the page?</a>
    </p>

    <h2>
        <code>vcard
        </code>
    </h2>

    <p>This class indicates the the content inside adheres to a microformat for a "<a
                href="http://microformats.org/wiki/hcard">hCard</a>" - which is:</p>
    <blockquote>
        hCard is a simple, open format for publishing people, companies, organizations on the web, using a 1:1
        representation of vCard (RFC2426) properties and values in HTML. hCard is one of several open microformat
        standards suitable for embedding data in HTML/HTML5, and Atom/RSS/XHTML or other XML.
    </blockquote>

    <p>There are lots of Microformats related <a href="https://microformats.org/wiki/existing-classes">class names</a>!
    </p>

    <p>Here are a few:</p>

    <ol>
        <li><code>adr</code></li>
        <li><code>affiliation</code></li>
        <li><code>author</code></li>
        <li><code>bday</code></li>
        <li><code>category</code></li>
        <li><code>class</code></li>
        <li><code>contact</code></li>
        <li><code>country-name</code></li>
        <li><code>description</code></li>
        <li><code>dtend</code></li>
        <li><code>dtreviewed</code></li>
        <li><code>dtstart</code></li>
        <li><code>education</code></li>
        <li><code>entry-content</code></li>
        <li><code>entry-summary</code></li>
        <li><code>entry-title</code></li>
        <li><code>email</code></li>
        <li><code>experience</code></li>
        <li><code>extended-address</code></li>
        <li><code>fn</code></li>
        <li><code>geo</code></li>
        <li><code>hentry</code></li>
        <li><code>hfeed</code></li>
        <li><code>hresume</code></li>
        <li><code>hreview</code></li>
        <li><code>item</code></li>
        <li><code>key</code></li>
        <li><code>label</code></li>
        <li><code>latitude</code></li>
        <li><code>locality</code></li>
        <li><code>location</code></li>
        <li><code>logo</code></li>
        <li><code>longitude</code></li>
        <li><code>mailer</code></li>
        <li><code>n</code></li>
        <li><code>note</code></li>
        <li><code>org</code></li>
        <li><code>organization-name</code></li>
        <li><code>organization-unit</code></li>
        <li><code>permalink</code></li>
        <li><code>photo</code></li>
        <li><code>post-office-box</code></li>
        <li><code>postal-code</code></li>
        <li><code>profile</code></li>
        <li><code>publications</code></li>
        <li><code>published</code></li>
        <li><code>rating</code></li>
        <li><code>region</code></li>
        <li><code>rev</code></li>
        <li><code>reviewer</code></li>
        <li><code>role</code></li>
        <li><code>skill</code></li>
        <li><code>sort-string</code></li>
        <li><code>sound</code></li>
        <li><code>street-address</code></li>
        <li><code>summary</code></li>
        <li><code>tel</code></li>
        <li><code>title</code></li>
        <li><code>type</code></li>
        <li><code>tz</code></li>
        <li><code>uid</code></li>
        <li><code>updated</code></li>
        <li><code>url</code></li>
        <li><code>value</code></li>
        <li><code>vcalendar</code></li>
        <li><code>vcard</code></li>
        <li><code>vevent</code></li>
        <li><code>version</code></li>
        <li><code>xoxo</code></li>

    </ol>
    <a href="https://microformats.org/wiki/existing-classes">Read more at microformats.org</a>.</p>

    <h2>In 2005 Google studied the web and determined the top 20 most popular <code>class</code> names:</h2>

    <ol>
        <li><code>footer</code></li>
        <li><code>menu</code></li>
        <li><code>title</code></li>
        <li><code>small</code></li>
        <li><code>text</code></li>
        <li><code>content</code></li>
        <li><code>header</code></li>
        <li><code>nav</code></li>
        <li><code>copyright</code></li>
        <li><code>button</code></li>
        <li><code>main</code></li>
        <li><code>search</code></li>
        <li><code>msonormal</code></li>
        <li><code>date</code></li>
        <li><code>smalltext</code></li>
        <li><code>body</code></li>
        <li><code>style1</code></li>
        <li><code>top</code></li>
        <li><code>white</code></li>
        <li><code>link</code></li>
    </ol>


    Source: <em><a
            href="https://web.archive.org/web/20060208002823/http://code.google.com/webstats/2005-12/classes.html">Web
        Authoring Statistics: Classes</a></em> (Internet Archive from 2006)


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
