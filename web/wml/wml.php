<?php

if (php_sapi_name() !== 'cli') {
    header("Content-Type: text/html; charset=UTF-8");
    $endpoint = 'https://webmention.io/artlung.com/webmention';
    $httpLinkValue = '<' . $endpoint . '>; rel="webmention"';
    header("Link: $httpLinkValue");
}

?><?php print '<?xml version="1.0"?>'; ?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN"
        "http://www.wapforum.org/DTD/wml_1.1.xml" >
<wml class="h-entry">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <!-- I can't use property and content attributes in meta tags in WML, ah well -->
        <meta name="og:image" content="https://lab.artlung.com/wml/og-wml-faux.jpg" />
    </head>
    <card id="main" class="e-content">
        <p mode="wrap" class="p-name">WML, WAP, &amp; Microformats Demo! by ArtLung<a class="u-url" href="https://lab.artlung.com/wml/faux"></a></p>

        <p mode="wrap">
            In 1998 WML, the Wireless Markup Language 1 was born.
            It is obsolete now. And the phone you are carrying and the browser you
            are reading probably cannot render it properly. It was designed for a time
            when bandwidth was very limited, and phones were not powerful.
        </p>
        <p mode="wrap">
            How it worked was a developer, such as myself, would write XML documents
            that would be served through a 3rd party WAP Gateway. That gateway
            would convert the WML to a binary format that the phone could understand.
        </p>

        <p mode="wrap">
            By about 2001, this was already obsolete. XHTML and WAP 2 were becoming popular,
            and phones were getting powerful enough to render documents without a WAP Gateway.
            I am Joe Crawford, and I have been making things on the web since before WML existed.
            I've probably marked up every sort of markup one can mark up. And these
            little bits of trivia represent offshoots of the web that fascinate me.
        </p>
        <p mode="wrap">
            One fascination? "WBMP." Wireless Bitmap images are 1-bit. They have no color. Just a
            classic on and off bit which we consider black or white, but more likely would
            render as a shade of green or amber on a monochrome phone.
        </p>
        <p><img src="https://lab.artlung.com/wml/artlung.gif" alt="ARTLUNG" /></p>
        <p mode="wrap">
            The image above is a <strong>GIF</strong>. I tried to use a WBMO. It didn't work. The Mime Type <strong>image/vnd.wap.wbmp</strong> version won't load in browsers.
            Adobe may kind of suck, but Photoshop can still read and write one of these files here  in 2025. <a href="https://lab.artlung.com/wml/artlung.wbmp">Try the WBMP</a>.
        </p>
        <p mode="wrap">
        And the <a href="https://lab.artlung.com/wml/">WML page</a> itself is being sent with a mime type of <strong>text/html</strong> rather than
            <strong>application/vnd.wap.xhtml+xml</strong> or <strong>text/vnd.wap.wml</strong> since I couldn't get those to load properly. One downloads the page. One shows the source.
        Browsers forgot how to render that kind of markup.
        </p>
        <p mode="wrap"><a href="https://en.wikipedia.org/wiki/Wireless_Markup_Language">Wikipedia</a> points at tools which can parse and render a WML document, but I don't believe there are any I can run on my computer. In that way, my computer is worse than some antique phone.</p>

        <p mode="wrap">
            There is a project: <b>
            <a href="https://blamba.de">Blamba.de</a></b>, which hosts a WAP Gateway and other goodies if you have an ancient phone that speaks WAP.
            There's a terrific presentation explaining <a href="https://www.youtube.com/watch?v=GXQqWpsEgpA&amp;t=14m">Blåmba! Behind the scenes of a 2000s-style ringtone provider</a>. It is fascinating!
        </p>
        <p mode="wrap">
            My fun fact? The <b>class</b> attribute is supported in WML. And that means that
            <a href="https://microformats.org/">Microformats</a> can be used in WML documents. This page demonstrates that.
            Microformats turn 20 years old here in 2025. It's an effort
            to make pages a bit more meaningful.
        </p>

        <p mode="wrap">
            I wrote above that this page uses WML 1.1.
            <br/>
            <a href="https://www.wapforum.org/DTD/wml_1.1.xml">https://www.wapforum.org/DTD/wml_1.1.xml</a>
            will not load properly because the DTD is served as XML from wapforum.org. Document type defintitions reach back to
            SGML, the Standard Generalized Markup Language, which was developed in the 1980s.
        </p>
        <p mode="wrap">
            Read the <a href="https://lab.artlung.com/wml/wml_1.1.xml">DTD</a> loaded from this site, with a <strong>text/plain</strong> MIME type. That
            DTD is copyright Wireless Application Protocol Forum Ltd., 1998,1999. It defines the elements and attributes that can be
            legal in a WML document, which also must be a valid XML document.
        </p>


        <?php
        $dtd_lines = file(__DIR__ . '/wml_1.1.xml');
        $tags = [];
        foreach ($dtd_lines as $line) {
            if (preg_match('/^<!ELEMENT\s+(\w+)/', $line)) {
                $parts = explode(' ', $line);
                $tag = trim($parts[1]);
                $tags[] = $tag;
            }
        }
        ?>
        <p mode="wrap">
            WML is sort of like HTML. But not. And sort of like XHTML. But not. Here are tags as mentioned by the <b>
                &lt;!ELEMENT&gt;
            </b> blocks from the DTD:
            <strong><?php echo implode(', ', $tags); ?></strong>
        </p>


        <p mode="wrap">
            <small>

                <a href="https://validator.w3.org/check?uri=https%3A%2F%2Flab.artlung.com%2Fwml&amp;charset=%28detect+automatically%29&amp;doctype=Inline&amp;group=0">
                    Validate the WML 1.1 page
                </a>

                <i>(kudos to the W3C for retaining this validator!)</i> ~

                There is also a <a href="https://lab.artlung.com/wml/faux">Faux</a> retro-styled version
                of the page, which consumes the WML XML and converts it, on the server, into <a href="https://validator.w3.org/check?uri=https%3A%2F%2Flab.artlung.com%2Fwml%2Ffaux">valid HTML5</a>. For fun.

            </small>
        </p>

        <p mode="wrap">
            <small>
                Because WML elements may have the <b>class</b> attribute, this page supports <a href="https://microformats.org/">microformats</a>:
                <i><a href="https://pin13.net/mf2/?url=https%3A%2F%2Flab.artlung.com%2Fwml%2F">as parsed with pin13.net</a></i>,
                <i><a href="https://indiewebify.me/validate-h-entry/?url=http%3A%2F%2Flab.artlung.com%2Fwml%2F">as parsed with indiewebify.me</a></i>
            </small>
        </p>


        <p mode="wrap">
            <small>
                Made by <a href="https://artlung.com/" class="p-author h-card"><img class="u-photo" src="https://cdn.artlung.com/blog/wp-content/uploads/2023/02/IMG_9150-100x100@2x.jpeg" width="32" height="32" alt="" /> Joe Crawford


                </a> for the <a href="https://lab.artlung.com/">ArtLung Lab</a> in <b class="dt-published">2025-06-18T18:28:07+00:00</b>.

                <br />

                Syndicated to:
                <a class="u-syndication" href="https://news.indieweb.org/en">IndieNews</a>

            </small>





        </p>
    </card>
</wml>