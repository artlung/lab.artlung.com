<?php

/**
 * Inline Block. TODO redo.
 * php version 7.4
 *
 * @category Silly
 * @package  Silly
 * @author   Joe Crawford <joe@artlung.com>
 * @license  GPL 2.0+ - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version  GIT: $Id$
 * @link     https://artlung.com/
 * @since    2024-12-03
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="Content-Language" content="en"/>
    <title>css :: external link with icon / image, workaround for IE</title>

    <style type="text/css">
        /* general stuff */
        html {
            height: 101%;
        }

        body {
            margin: 0;
            padding: 10px;
            background: white;
            color: black;
            font-size: 100.1%;
            text-align: center;
            line-height: 110%;
        }

        #wrapper {
            width: 760px;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        h1, h2 {
            font-family: arial, verdana, sans-serif;
        }

        h1 {
            font-size: 1.2em;
            margin: .35em 0;
        }

        h2 {
            font-size: 1em;
            margin: 1em 0 0 0;
        }

        p, pre {
            margin: .35em 0 0 0;
        }

        p {
            font-family: verdana, arial, sans-serif;
            font-size: .8em;
        }

        pre {
            background: #FFFFCC;
            color: green;
            font-size: .9em;
        }

        * html pre {
            font-size: .75em;
        }

        #wrong, #illustr {
            border: 1px solid green;
            padding: 10px;
            background: #F7F7F7;
            color: inherit;
        }

        #preloadLinkImgs {
            position: absolute;
            top: 0;
            left: 0;
            margin-left: -9999px;
        }

        img {
            border: 0;
            vertical-align: middle;
        }

        a {
            font-weight: bold;
            font-size: .95em;
            font-family: verdana, arial, sans-serif;
            text-decoration: underline; /* *** needed for my Opera 8.01 *** */
        }

        a:hover {
            text-decoration: none;
        }

        /* this way it doesn't work in IE: */

        #wrong .extern {
            background: url(https://web.archive.org/web/20070318000027im_/http://home.tiscali.nl/developerscorner/css-discuss/images/iconout.gif) no-repeat 100% 50%;
            padding: 0 13px 0 0;
        }


        /* styles for iconized links */

        a {
            background: inherit; /* FF correction for double underline (sometimes) */
        }

        a u {
            background: url(https://web.archive.org/web/20070318000027im_/http://home.tiscali.nl/developerscorner/css-discuss/images/iconout.gif) no-repeat 100% 50%;
            padding: 0 13px 0 0; /* width of the img */
            display: inline-block; /* IE correction to show the icon */
            cursor: pointer; /* IE correction to show hand instead of arrow */
            vertical-align: bottom; /* Opera correction to get the last word vertical aligned */
        }

        a:visited u {
            background-image: url(https://web.archive.org/web/20070318000027im_/http://home.tiscali.nl/developerscorner/css-discuss/images/iconout-visited.gif);
        }

        a:hover u {
            background-image: url(https://web.archive.org/web/20070318000027im_/http://home.tiscali.nl/developerscorner/css-discuss/images/iconout-hover.gif);
            text-decoration: none; /* avoiding the "u" still working on the last word! :-) */
        }
    </style>

    <!--[if lte IE 7]>
    <style type="text/css">
        a u { /* antidote for IE: contra Opera correction */
            vertical-align: inherit;
            margin-top: -1px;
        }
    </style>
    <![endif]-->
    <script src="../2025.js<?php
    echo '?' . filemtime('../2025.js');
    ?>"></script>
</head>
<body>

<h1>Archived from http://home.tiscali.nl/developerscorner/css-discuss/test-link-iconENupdate.htm</h1>

<div id="wrapper">
    <h1>CSS workaround for external link with small icon</h1>

    <p style="font-size: .75em; padding-bottom: 5px; margin: 10px 0 20px 0; border-bottom: 1px solid #C0C0C9;">
        <i>update 28 feb. 2007</i><br/>
        Tested in IE7. The * html hack for IE is replaced by a general conditional comment,
        for IE7 is reacting as IE6.</p>

    <h2>The Problem</h2>

    <p>Normally IE doesn't show link icons as background images, if the link is broken in 2 lines.<br/>
        <br/>
        <b>HTML</b>:</p>

    <pre>&lt;a class=&quot;extern&quot; href=&quot;http://www.worldoutside.com/&quot;&gt;come to universe&lt;/a&gt;</pre>

    <p><b>CSS</b>:</p>

    <pre>.extern {
    background: url(images/iconout.gif) no-repeat 100% 50%;
    padding: 0 13px 0 0;
    }</pre>

    <p id="wrong">Lorem ipsum dolor sit amet, consectetur adipisicing <a
                href="/web/20070318000027/http://home.tiscali.nl/developerscorner/index.html">this
            is a normal internal link</a> elit, sed do eiusmod tempor incididunt ut labore et
        <a class="extern" href="/web/20070318000027/http://home.tiscali.nl/developerscorner/test-link01.htm">this is an
            external link</a> dolore magna aliqua. Ut enim ad minim
        <a class="extern" href="/web/20070318000027/http://home.tiscali.nl/developerscorner/test-link02.htm">this is a
            good long external link</a> veniam, quis nostrud exercitation
        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit
        esse cillum dolore eu fugiat nulla <a class="extern"
                                              href="/web/20070318000027/http://home.tiscali.nl/developerscorner/test-link03.htm">this
            is again an external link</a> pariatur.
        Excepteur sint occaecat cupidatat non <a class="extern"
                                                 href="/web/20070318000027/http://home.tiscali.nl/developerscorner/test-link04.htm">this
            is certainly a very long external link but
            that can happen sometimes isn't</a> proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <p>[ for instance the Wikipedia is showing this fenomenon:
        <a href="/web/20070318000027/http://home.tiscali.nl/developerscorner/css-discuss/images/broken-wiki-ie-link-icons.gif">
            screenshot</a> ]</p>

    <h2>But now!</h2>

    <p>Attention: this is IE-proof, but a terrible trick; not beautiful and far away from semantics!
        - But: once the css is done, it's very easy to apply in the text writing.</p>

    <p id="illustr">Lorem ipsum dolor sit amet, consectetur adipisicing <a
                href="/web/20070318000027/http://home.tiscali.nl/developerscorner/index.html">this
            is a normal internal link</a> elit, sed do eiusmod tempor incididunt ut labore et
        <a href="/web/20070318000027/http://home.tiscali.nl/developerscorner/test-link01.htm">this is an external <u>link</u></a>
        dolore magna aliqua. Ut enim ad minim
        <a href="/web/20070318000027/http://home.tiscali.nl/developerscorner/test-link02.htm">this is a good long
            external <u>link</u></a> veniam, quis nostrud exercitation
        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit
        esse cillum dolore eu fugiat nulla <a
                href="/web/20070318000027/http://home.tiscali.nl/developerscorner/test-link03.htm">this is again an
            external <u>link</u></a> pariatur.
        Excepteur sint occaecat cupidatat non <a
                href="/web/20070318000027/http://home.tiscali.nl/developerscorner/test-link04.htm">this is certainly a
            very long external link but
            that can happen sometimes <u>isn't</u></a> proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum.</p>

    <p>[ click external link and come back to see the visited effect ]<br/>
        <br/>
        <b>IMG</b>:<br/>
        The images used here are 13x10px; 3px left side is instead of margin.<br/>
        Enlarged normal state icon (fuchsia is transparent in reality)
        <img src="https://web.archive.org/web/20070318000027im_/http://home.tiscali.nl/developerscorner/css-discuss/images/external_link65x50-normal.gif"
             width="65" height="50" alt=""/>
        <br/>
        <b>HTML</b>:</p>

    <pre>&lt;a href=&quot;http://www.worldoutside.com/&quot;&gt;come to &lt;u&gt;universe&lt;/u&gt;&lt;/a&gt;</pre>

    <p>The &lt;u&gt; is the hook for the img. While it is set only on the last word of the link, nothing can break.
        <img src="https://web.archive.org/web/20070318000027im_/http://home.tiscali.nl/developerscorner/images/smiley.gif"
             width="15" height="15" alt=""/><br/><br>
        <b>CSS</b>:</p>

    <pre>a {
    background: inherit; /* FF correction for double underline (sometimes) */
    }
a u {
    background: url(images/iconout.gif) no-repeat 100% 50%;
    padding: 0 13px 0 0;    /* width of the img */
    display: inline-block;    /* IE correction to show the icon */
    cursor: pointer;    /* IE correction to show hand instead of arrow */
    vertical-align: bottom;    /* Opera correction to get the last word vertical aligned */
    }
a:visited u {
    background-image: url(images/iconout-visited.gif);
    }
a:hover u {
    background-image: url(images/iconout-hover.gif);
    text-decoration: none; /* avoiding the &quot;u&quot; working for the last word! :-) */
    }</pre>

    <p><b>HEAD</b>:</p>

    <pre>&lt;!--[if lte IE 7]&gt;
&lt;style type=&quot;text/css&quot;&gt;
    a u { /* antidote for IE: contra Opera correction */
        vertical-align: inherit;
        margin-top: -1px;
        }
&lt;/style&gt;
&lt;![endif]--&gt;</pre>

    <p>Remarks:</p>
    <ul>
        <li><p>Only tested in IE6, IE7, FF2 and Opera9 under WinXP.</p></li>
        <li><p>Of course the same can be achieved with a &lt;span&gt; instead of &lt;u&gt;, but I'm a lazy boy.
                <img src="https://web.archive.org/web/20070318000027im_/http://home.tiscali.nl/developerscorner/images/smiley.gif"
                     width="15" height="15" alt=""/></p></li>
        <li><p>If desired, in the same way the icon can be positioned before the link instead of afterwards.</p></li>
        <li><p>This page is a short version of a (yet unfinished) Dutch article.<br/>
                See
                <a href="https://web.archive.org/web/20070318000027/http://home.tiscali.nl/developerscorner/nederdev/test-link-icon6.htm">Met
                    css een
                    externe link voorzien van een icoontje</a> (2 Jan. 2007).</p></li>
        <li><p>Impossible to adapt an existing site css wise.<br/>
                Changing a class
                &quot;.extern&quot; cannot efford this &gt; dive into html...</p></li>
        <li><p>Once in the html the &lt;u&gt;'s and &lt;/u&gt;'s are pasted around the
                last words of the links, all kind of changings can be made by css only.</p></li>
        <li><p>Though I guess it must be possible to make some clever script: which
                can use an existing link class &quot;external&quot; to glue a &lt;u&gt; and
                &lt;/u&gt; around the last word of a link. Then the rest can be done by css.
                So maybe it can be made backwards compatible by script...</p></li>
        <li><p>Then the only difference with pasting a foreground-img with javascript is the
                possibility to change the background-img by css at hover.</p></li>
    </ul>

    <p>Links:</p>
    <ul>
        <li><p>Article: <a
                        href="https://web.archive.org/web/20070318000027/http://home.tiscali.nl/developerscorner/imaging/fun-links.html">Fun
                    links in css</a>. Similar IE problem with hand made img underlining.
                Workaround, mmm yes: ugly with a factor{amount of words} ...</p></li>
        <li><p>Ingo Chao's article <a
                        href="https://web.archive.org/web/20070318000027/http://www.satzansatz.de/cssd/wrappinglinkbg.html">Background
                    images lost
                    on multi line inline <u>links</u></a>.</p></li>
        <li><p>Javascript solution, using class name for external link: Arc90
                lab's <a
                        href="https://web.archive.org/web/20070318000027/http://lab.arc90.com/2006/08/external_link.php">Tools:
                    External <u>Link</u></a>.</p></li>
    </ul>

    <p><i><a href="/web/20070318000027/http://home.tiscali.nl/developerscorner/index.html">francky</a></i>,<br/>
        27 Febr. 2007</p>

</div>

<div id="preloadLinkImgs">
    <img src="https://web.archive.org/web/20070318000027im_/http://home.tiscali.nl/developerscorner/css-discuss/images/iconout.gif"
         alt="" width="13" height="10"/>
    <img src="https://web.archive.org/web/20070318000027im_/http://home.tiscali.nl/developerscorner/css-discuss/images/iconout-hover.gif"
         alt="" width="13" height="10"/>
    <img src="https://web.archive.org/web/20070318000027im_/http://home.tiscali.nl/developerscorner/css-discuss/images/iconout-visited.gif"
         alt="" width="13" height="10"/>
</div>

</body>
</html>
<!--
     FILE ARCHIVED ON 00:00:27 Mar 18, 2007 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 01:30:03 Nov 30, 2024.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 0.587
  exclusion.robots: 0.037
  exclusion.robots.policy: 0.027
  esindex: 0.01
  cdx.remote: 15.898
  LoadShardBlock: 190.938 (3)
  PetaboxLoader3.datanode: 89.043 (4)
  PetaboxLoader3.resolve: 93.0 (2)
  load_resource: 91.207
-->