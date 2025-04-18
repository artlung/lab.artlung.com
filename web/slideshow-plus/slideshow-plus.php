<?php
/**
 * Slideshow Plus. TODO redo.
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
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN"
    "https://www.w3.org/TR/1999/REC-html401-19991224/frameset.dtd">
<html>
<head>
    <title>Slideshow Plus. Lab. ArtLung</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
    <script language="Javascript" type="text/javascript">
        <!--

        /*
            this was made by joe crawford https://artlung.com/

            visit the lab and leave a tip if this was useful

            https://artlung.com/lab/

            if you have no money, i understand

            feel free to use and share and learn from this code

            download and save these 5 files to implement this:

            https://artlung.com/lab/scripting/slideshow-plus/index.html
            https://artlung.com/lab/scripting/slideshow-plus/loading.html
            https://artlung.com/lab/scripting/slideshow-plus/other.html
            https://artlung.com/lab/scripting/slideshow-plus/requires_javascript.html
            https://artlung.com/lab/scripting/slideshow-plus/the_navigation.html

                - Joe Crawford [11 April 2002]
        */

        /*
         *************************************************************

            the array of webpages, this should be a pipe -- "|"
            (no quote marks) delimited list of urls. just put
            your urls in there, and it should work fine. they
            can be relative or full or whatever urls.

            example, it could just be:

            everySlideshowUrlSeparatedByPipes = "slide1.html|slide2.html|slide3.html";

            or if you had numbered slides in a folder it might be:

            everySlideshowUrlSeparatedByPipes = "slides/1.html|slides/2.html|slides/3.html";

            the idea is to make it simple. also, remember that
            variable with all the urls should be all on one line.

         *************************************************************
        */

        // every slide, separated by pipes:
        var everySlideshowUrlSeparatedByPipes = "https://www.dogpile.com/|https://artlung.com/|https://artlung.com/links/|https://www.urmcargoservices.com/|https://www.google.com/";

        // turn that into an array we can use
        var pagesArray = everySlideshowUrlSeparatedByPipes.split('|');

        // count of the pages
        var howManyPages = pagesArray.length;

        // position of the first slide (always zero)
        var startPageNumber = 0;

        // position of the last page (javascript starts counting
        //  at zero, so the number minus 1)
        var endPageNumber = howManyPages - 1;

        // placeholder so the script knows where to go next.
        var youAreHere = 0;

        /*
         *************************************************************

            here is the actual function. on child
            pages this is referenced with
            top.ArtLungSlideShow(-1) or
            top.ArtLungSlideShow(1)

         *************************************************************
        */
        function ArtLungSlideShow(inputNumber) {

            // if this is getting fired, kill any existing
            // nexts, we're rocking now!
            if (TIMEKEEP)
                clearTimeout(TIMEKEEP);

            // increment our location...
            youAreHere = youAreHere + inputNumber;

            // if the number's too low, reset it.
            if (youAreHere < startPageNumber)
                youAreHere = startPageNumber;

            // if the number's too large, reset it.
            if (youAreHere > endPageNumber)
                youAreHere = endPageNumber;

            // actually get a url!

            if (pagesArray[youAreHere])
                top.frames['CONTENT_FRAME'].location.href = pagesArray[youAreHere];
            // this        ^^^^^^^^^^^^^ should be the name of the
            // frame you want urls to load into. you can change
            // the frameset to horizontal or vertical or whatever,
            // but the names of the frames have to stay intact

            if ((doAutomatic != 0) && (pagesArray[youAreHere])) {
                rotateToNext();
            }

        }

        /*
         *************************************************************

            DO YOU WANT TO HAVE THIS BE AUTOMATIC?

         *************************************************************
        */

        // this is 1 if you want the slideshow to move on its own
        // otherwise, set it to 0
        var doAutomatic = 1;
        // time interval in seconds, only applies if doAutomatic=1
        var s = 6;
        // holder variable for the timeouts, only applies if doAutomatic=1
        var TIMEKEEP = 0;

        // function to do the forward thing.
        function rotateToNext() {
            if (doAutomatic != 0)
                TIMEKEEP = window.setTimeout('ArtLungSlideShow(1)', s * 1000);
        }


        //-->
    </script>
    <script src="/2025.js<?php
    echo '?' . filemtime('../2025.js');
    ?>"></script>
</head>
<frameset rows="26,*" border="0" framespacing="0" frameborder="NO">
    <!-- I set the border in the frameset tag to zero. This prevents it from validating. Sorry. -->
    <frame
        scrolling="NO" name="NAVIGATIONAL_FRAME"
        marginwidth="0" marginheight="0"
        src="the_navigation.html">
    <frame scrolling="AUTO" name="CONTENT_FRAME"
           marginwidth="1" marginheight="1"
           src="loading.html">

    <noframes>
        <body>
        <h1><font face="verdana, Arial">This slideshow requires Frames.</font></h1>
        </body>
    </noframes>
</frameset>


</html>