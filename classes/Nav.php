<?php

namespace ArtlungLab;

/**
 * Class Nav
 *
 * @category PHP
 * @package  Classes
 * @author   Joe Crawford <joe@artlung.com>
 * @license  GPL 2.0+ - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version  Release: 1.0
 * @link     https://artlung.com/
 * @since    2024-12-03
 */
class Nav
{


    /**
     * Slugs and titles
     *
     * @return array
     */
    public static function getMetadata(): array
    {

        // yaml is the source of truth, generate this with slugs_and_titles.php do not hand edit this:

        /* START: handled by php generate-nav-value LAST UPDATE 2024-12-18 00:01:24 */
        return $slugs_and_titles = array (
        '50states' => 
        array (
        'slug' => '50states',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2003,
        'canonical_url' => 'https://lab.artlung.com/50states/',
        'title' => '50 U.S. States Dropdown Box HTML Code Snippets',
        'tags' => 
        array (
        0 => 'html',
        ),
        ),
        'ArtLung-Notes' => 
        array (
        'slug' => 'ArtLung-Notes',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2010,
        'canonical_url' => 'https://lab.artlung.com/ArtLung-Notes/',
        'title' => 'ArtLung Notes (Experimental, 2010)',
        'tags' => 
        array (
        ),
        ),
        'a-outline-none' => 
        array (
        'slug' => 'a-outline-none',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2001,
        'canonical_url' => 'https://lab.artlung.com/a-outline-none/',
        'title' => 'outline:none to affect IE5/Mac focus outline',
        'tags' => 
        array (
        ),
        ),
        'additive-font-size' => 
        array (
        'slug' => 'additive-font-size',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2001,
        'canonical_url' => 'https://lab.artlung.com/additive-font-size/',
        'title' => 'How font-size accumulates',
        'tags' => 
        array (
        ),
        ),
        'ancient-tidy-tutorial' => 
        array (
        'slug' => 'ancient-tidy-tutorial',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 1999,
        'canonical_url' => 'https://lab.artlung.com/ancient-tidy-tutorial/',
        'title' => 'Ancient HTML Tidy Tutorial',
        'tags' => 
        array (
        0 => 'html',
        ),
        ),
        'anti-cache' => 
        array (
        'slug' => 'anti-cache',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2001,
        'canonical_url' => 'https://lab.artlung.com/anti-cache/',
        'title' => 'Preventing Browser Cache',
        'tags' => 
        array (
        ),
        ),
        'asp' => 
        array (
        'slug' => 'asp',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2001,
        'canonical_url' => 'https://lab.artlung.com/asp/',
        'title' => 'ASP Hello World Script',
        'tags' => 
        array (
        0 => 'asp',
        ),
        ),
        'asp-cdonts' => 
        array (
        'slug' => 'asp-cdonts',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2005,
        'canonical_url' => 'https://lab.artlung.com/asp-cdonts/',
        'title' => 'ASP: CDONTS snippet',
        'tags' => 
        array (
        0 => 'asp',
        ),
        ),
        'asp-selectbox-function' => 
        array (
        'slug' => 'asp-selectbox-function',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2016,
        'canonical_url' => 'https://lab.artlung.com/asp-selectbox-function/',
        'title' => 'selectBox function in Traditional ASP',
        'tags' => 
        array (
        0 => 'asp',
        ),
        ),
        'autocalc' => 
        array (
        'slug' => 'autocalc',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2002,
        'canonical_url' => 'https://lab.artlung.com/autocalc/',
        'title' => 'Auto-Calculator',
        'tags' => 
        array (
        ),
        ),
        'barcampla6' => 
        array (
        'slug' => 'barcampla6',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2008,
        'canonical_url' => 'https://lab.artlung.com/barcampla6/',
        'title' => 'jQuery Basics (barcampla6)',
        'tags' => 
        array (
        0 => 'javascript',
        ),
        ),
        'bloggingbot' => 
        array (
        'slug' => 'bloggingbot',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2018,
        'canonical_url' => 'https://lab.artlung.com/bloggingbot/',
        'title' => 'Blogging Bot (Markov Chains are Hilarious)',
        'tags' => 
        array (
        ),
        ),
        'bluedragon-net-installer' => 
        array (
        'slug' => 'bluedragon-net-installer',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2010,
        'canonical_url' => 'https://lab.artlung.com/bluedragon-net-installer/',
        'title' => 'Screenshots of an installation of BlueDragon 7.1 for the Microsoft .NET Framework',
        'tags' => 
        array (
        ),
        ),
        'blur' => 
        array (
        'slug' => 'blur',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2004,
        'canonical_url' => 'https://lab.artlung.com/blur/',
        'title' => 'CSS Blur Example',
        'tags' => 
        array (
        0 => 'css',
        ),
        ),
        'bookmarklets' => 
        array (
        'slug' => 'bookmarklets',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2006,
        'canonical_url' => 'https://lab.artlung.com/bookmarklets/',
        'title' => 'Killer Bookmarklets I have Come Across',
        'tags' => 
        array (
        ),
        ),
        'border-style' => 
        array (
        'slug' => 'border-style',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2002,
        'canonical_url' => 'https://lab.artlung.com/border-style/',
        'title' => 'border-style Experiment',
        'tags' => 
        array (
        ),
        ),
        'bug-mac-netscape-forms-update' => 
        array (
        'slug' => 'bug-mac-netscape-forms-update',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 1998,
        'canonical_url' => 'https://lab.artlung.com/bug-mac-netscape-forms-update/',
        'title' => 'Netscape/Macintosh Changing Form Button or Submit Input Value Fails',
        'tags' => 
        array (
        ),
        ),
        'buttonybutton' => 
        array (
        'slug' => 'buttonybutton',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2015,
        'canonical_url' => 'https://lab.artlung.com/buttonybutton/',
        'title' => 'Buttony Button',
        'tags' => 
        array (
        ),
        ),
        'buttonybuttonsonbuttons' => 
        array (
        'slug' => 'buttonybuttonsonbuttons',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2015,
        'canonical_url' => 'https://lab.artlung.com/buttonybuttonsonbuttons/',
        'title' => 'Big Buttony Buttons on Buttons',
        'tags' => 
        array (
        ),
        ),
        'call-original-version-of-redefined-vbscript' => 
        array (
        'slug' => 'call-original-version-of-redefined-vbscript',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2016,
        'canonical_url' => 'https://lab.artlung.com/call-original-version-of-redefined-vbscript/',
        'title' => 'Call the native version of a VBScript object',
        'tags' => 
        array (
        0 => 'vbscript',
        ),
        ),
        'camel-selector' => 
        array (
        'slug' => 'camel-selector',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2002,
        'canonical_url' => 'https://lab.artlung.com/camel-selector/',
        'title' => 'camelCase <-> selector-case w/o Regex',
        'tags' => 
        array (
        ),
        ),
        'canvas-html-render-download' => 
        array (
        'slug' => 'canvas-html-render-download',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2024,
        'canonical_url' => 'https://lab.artlung.com/canvas-html-render-download/',
        'title' => 'Canvas HTML Render Download not working',
        'tags' => 
        array (
        0 => 'html',
        ),
        ),
        'change-all-links' => 
        array (
        'slug' => 'change-all-links',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2000,
        'canonical_url' => 'https://lab.artlung.com/change-all-links/',
        'title' => 'How can I change every link on a page to something new?',
        'tags' => 
        array (
        ),
        ),
        'change-content-in-iframe-with-prototype' => 
        array (
        'slug' => 'change-content-in-iframe-with-prototype',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2010,
        'canonical_url' => 'https://lab.artlung.com/change-content-in-iframe-with-prototype/',
        'title' => 'What is the way to access IFrame\'s element using Prototype $ method?',
        'tags' => 
        array (
        ),
        ),
        'change-document-background-color' => 
        array (
        'slug' => 'change-document-background-color',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 1999,
        'canonical_url' => 'https://lab.artlung.com/change-document-background-color/',
        'title' => 'Change document background color',
        'tags' => 
        array (
        ),
        ),
        'change-space-between-paragraphs' => 
        array (
        'slug' => 'change-space-between-paragraphs',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2006,
        'canonical_url' => 'https://lab.artlung.com/change-space-between-paragraphs/',
        'title' => 'Changing the spacing between paragraphs',
        'tags' => 
        array (
        ),
        ),
        'checkbox-validate' => 
        array (
        'slug' => 'checkbox-validate',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2001,
        'canonical_url' => 'https://lab.artlung.com/checkbox-validate/',
        'title' => 'Checkbox Validator',
        'tags' => 
        array (
        ),
        ),
        'circles-crawl' => 
        array (
        'slug' => 'circles-crawl',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2010,
        'canonical_url' => 'https://lab.artlung.com/circles-crawl/',
        'title' => 'Circles Crawl and you click them (jQuery)',
        'tags' => 
        array (
        0 => 'javascript',
        ),
        ),
        'clock-concept' => 
        array (
        'slug' => 'clock-concept',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2024,
        'canonical_url' => 'https://lab.artlung.com/clock-concept/',
        'title' => 'Clock Concept (1998-2024)',
        'tags' => 
        array (
        ),
        ),
        'coldfusion-break-db' => 
        array (
        'slug' => 'coldfusion-break-db',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2003,
        'canonical_url' => 'https://lab.artlung.com/coldfusion-break-db/',
        'title' => 'Ways to break a lock on an Access Database with Cold Fusion',
        'tags' => 
        array (
        0 => 'coldfusion',
        ),
        ),
        'coldfusion-force-download' => 
        array (
        'slug' => 'coldfusion-force-download',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2016,
        'canonical_url' => 'https://lab.artlung.com/coldfusion-force-download/',
        'title' => 'ColdFusion: Force Download of File',
        'tags' => 
        array (
        0 => 'coldfusion',
        ),
        ),
        'coldfusion-titlecase' => 
        array (
        'slug' => 'coldfusion-titlecase',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2003,
        'canonical_url' => 'https://lab.artlung.com/coldfusion-titlecase/',
        'title' => 'ColdFusion TitleCase Function',
        'tags' => 
        array (
        0 => 'coldfusion',
        ),
        ),
        'compare-fields' => 
        array (
        'slug' => 'compare-fields',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2002,
        'canonical_url' => 'https://lab.artlung.com/compare-fields/',
        'title' => 'Compare two fields, Submit only if they are the same:',
        'tags' => 
        array (
        ),
        ),
        'connect-to-remote-server' => 
        array (
        'slug' => 'connect-to-remote-server',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2004,
        'canonical_url' => 'https://lab.artlung.com/connect-to-remote-server/',
        'title' => 'Simple example connecting to a remote server',
        'tags' => 
        array (
        ),
        ),
        'copy-to-clipboard-javascript' => 
        array (
        'slug' => 'copy-to-clipboard-javascript',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2005,
        'canonical_url' => 'https://lab.artlung.com/copy-to-clipboard-javascript/',
        'title' => 'Copy to Clipboard JavaScript',
        'tags' => 
        array (
        0 => 'javascript',
        ),
        ),
        'countdown' => 
        array (
        'slug' => 'countdown',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2005,
        'canonical_url' => 'https://lab.artlung.com/countdown/',
        'title' => 'Super Simple Countdown in PHP.',
        'tags' => 
        array (
        0 => 'php',
        ),
        ),
        'countdown-daily-to-a-time' => 
        array (
        'slug' => 'countdown-daily-to-a-time',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2011,
        'canonical_url' => 'https://lab.artlung.com/countdown-daily-to-a-time/',
        'title' => 'Countdown to a time of the day every day (PHP)',
        'tags' => 
        array (
        0 => 'php',
        ),
        ),
        'countdown-to-the-first' => 
        array (
        'slug' => 'countdown-to-the-first',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2011,
        'canonical_url' => 'https://lab.artlung.com/countdown-to-the-first/',
        'title' => 'Countdown in to the first of the month in PHP',
        'tags' => 
        array (
        0 => 'php',
        ),
        ),
        'crossdomain' => 
        array (
        'slug' => 'crossdomain',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2009,
        'canonical_url' => 'https://lab.artlung.com/crossdomain/',
        'title' => 'crossdomain.xml',
        'tags' => 
        array (
        ),
        ),
        'css3-smiley' => 
        array (
        'slug' => 'css3-smiley',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2024,
        'canonical_url' => 'https://lab.artlung.com/css3-smiley/',
        'title' => 'CSS3 Smiley in Color',
        'tags' => 
        array (
        0 => 'css',
        ),
        ),
        'detagger' => 
        array (
        'slug' => 'detagger',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2005,
        'canonical_url' => 'https://lab.artlung.com/detagger/',
        'title' => 'Fun Detagger Script',
        'tags' => 
        array (
        ),
        ),
        'detection-real' => 
        array (
        'slug' => 'detection-real',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 1999,
        'canonical_url' => 'https://lab.artlung.com/detection-real/',
        'title' => 'RealMedia Plugin Detection',
        'tags' => 
        array (
        ),
        ),
        'display-inline-block' => 
        array (
        'slug' => 'display-inline-block',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2009,
        'canonical_url' => 'https://lab.artlung.com/display-inline-block/',
        'title' => 'CSS workaround for external link with small icon (2007)',
        'tags' => 
        array (
        0 => 'css',
        ),
        ),
        'domain-name-sql-excel' => 
        array (
        'slug' => 'domain-name-sql-excel',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2016,
        'canonical_url' => 'https://lab.artlung.com/domain-name-sql-excel/',
        'title' => 'Extract Domain Names from a list of email addresses',
        'tags' => 
        array (
        0 => 'sql',
        ),
        ),
        'dropdown' => 
        array (
        'slug' => 'dropdown',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2004,
        'canonical_url' => 'https://lab.artlung.com/dropdown/',
        'title' => 'Dropdown Navigation',
        'tags' => 
        array (
        ),
        ),
        'dropdown-focus' => 
        array (
        'slug' => 'dropdown-focus',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2001,
        'canonical_url' => 'https://lab.artlung.com/dropdown-focus/',
        'title' => 'Setting Dropdown Focus',
        'tags' => 
        array (
        ),
        ),
        'dropdown-frames' => 
        array (
        'slug' => 'dropdown-frames',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2008,
        'canonical_url' => 'https://lab.artlung.com/dropdown-frames/',
        'title' => 'Dropdown Navigation in Frames',
        'tags' => 
        array (
        ),
        ),
        'dropdown-only-some-new-window' => 
        array (
        'slug' => 'dropdown-only-some-new-window',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2002,
        'canonical_url' => 'https://lab.artlung.com/dropdown-only-some-new-window/',
        'title' => 'Dropdown Navigation Where Only Some Links Open New Windows',
        'tags' => 
        array (
        ),
        ),
        'dropdown-submit-form' => 
        array (
        'slug' => 'dropdown-submit-form',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2008,
        'canonical_url' => 'https://lab.artlung.com/dropdown-submit-form/',
        'title' => 'dropdown-submit-form',
        'tags' => 
        array (
        ),
        ),
        'echo-http-host' => 
        array (
        'slug' => 'echo-http-host',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2008,
        'canonical_url' => 'https://lab.artlung.com/echo-http-host/',
        'title' => 'HTTP_HOST environment variable in PHP',
        'tags' => 
        array (
        0 => 'php',
        ),
        ),
        'email-submission-stinks' => 
        array (
        'slug' => 'email-submission-stinks',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2003,
        'canonical_url' => 'https://lab.artlung.com/email-submission-stinks/',
        'title' => 'Form action mailto: stinks',
        'tags' => 
        array (
        ),
        ),
        'first-child-last-child' => 
        array (
        'slug' => 'first-child-last-child',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2011,
        'canonical_url' => 'https://lab.artlung.com/first-child-last-child/',
        'title' => 'First Child Last Child Demonstration',
        'tags' => 
        array (
        ),
        ),
        'font-awesome-sample' => 
        array (
        'slug' => 'font-awesome-sample',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2017,
        'canonical_url' => 'https://lab.artlung.com/font-awesome-sample/',
        'title' => 'Font Awesome 4.6.3 Class Explorer (version 4.6.3)',
        'tags' => 
        array (
        ),
        ),
        'form-image-background' => 
        array (
        'slug' => 'form-image-background',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2005,
        'canonical_url' => 'https://lab.artlung.com/form-image-background/',
        'title' => 'background images in form elements',
        'tags' => 
        array (
        ),
        ),
        'format-time' => 
        array (
        'slug' => 'format-time',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2002,
        'canonical_url' => 'https://lab.artlung.com/format-time/',
        'title' => 'JavaScript Date Formatting Demo',
        'tags' => 
        array (
        0 => 'javascript',
        ),
        ),
        'frames-mouseover' => 
        array (
        'slug' => 'frames-mouseover',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2004,
        'canonical_url' => 'https://lab.artlung.com/frames-mouseover/',
        'title' => 'frames-mouseover',
        'tags' => 
        array (
        ),
        ),
        'gallery' => 
        array (
        'slug' => 'gallery',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2001,
        'canonical_url' => 'https://lab.artlung.com/gallery/',
        'title' => 'AutoMagic Gallery Listing',
        'tags' => 
        array (
        ),
        ),
        'generic-validator' => 
        array (
        'slug' => 'generic-validator',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2004,
        'canonical_url' => 'https://lab.artlung.com/generic-validator/',
        'title' => 'Generic Validator',
        'tags' => 
        array (
        ),
        ),
        'gettysburg' => 
        array (
        'slug' => 'gettysburg',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2006,
        'canonical_url' => 'https://lab.artlung.com/gettysburg/',
        'title' => 'Gettysburg Address in HTML Buttons',
        'tags' => 
        array (
        0 => 'html',
        ),
        ),
        'goal50' => 
        array (
        'slug' => 'goal50',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2024,
        'canonical_url' => 'https://lab.artlung.com/goal50/',
        'title' => 'Goal of 50!',
        'tags' => 
        array (
        ),
        ),
        'group-concat-mysql' => 
        array (
        'slug' => 'group-concat-mysql',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2016,
        'canonical_url' => 'https://lab.artlung.com/group-concat-mysql/',
        'title' => 'Using GROUP_CONCAT()',
        'tags' => 
        array (
        0 => 'sql',
        ),
        ),
        'history' => 
        array (
        'slug' => 'history',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 1999,
        'canonical_url' => 'https://lab.artlung.com/history/',
        'title' => 'How to implement a Forward and Back Buttons',
        'tags' => 
        array (
        ),
        ),
        'html-2.0' => 
        array (
        'slug' => 'html-2.0',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2001,
        'canonical_url' => 'https://lab.artlung.com/html-2.0/',
        'title' => 'HTML 2.0 - An exploration!',
        'tags' => 
        array (
        0 => 'html',
        ),
        ),
        'image-border' => 
        array (
        'slug' => 'image-border',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 1999,
        'canonical_url' => 'https://lab.artlung.com/image-border/',
        'title' => 'Several Approaches to Do Image Borders of Different Colors: 1999',
        'tags' => 
        array (
        ),
        ),
        'image-hover' => 
        array (
        'slug' => 'image-hover',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2004,
        'canonical_url' => 'https://lab.artlung.com/image-hover/',
        'title' => 'Image Hover',
        'tags' => 
        array (
        ),
        ),
        'input-direction' => 
        array (
        'slug' => 'input-direction',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2006,
        'canonical_url' => 'https://lab.artlung.com/input-direction/',
        'title' => 'Change Form Input Direction',
        'tags' => 
        array (
        ),
        ),
        'interesting-date-layout' => 
        array (
        'slug' => 'interesting-date-layout',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 1999,
        'canonical_url' => 'https://lab.artlung.com/interesting-date-layout/',
        'title' => 'interesting-date-layout',
        'tags' => 
        array (
        ),
        ),
        'invisible-unspiderable-link' => 
        array (
        'slug' => 'invisible-unspiderable-link',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2024,
        'canonical_url' => 'https://lab.artlung.com/invisible-unspiderable-link/',
        'title' => 'Invisible Unspiderable Link',
        'tags' => 
        array (
        ),
        ),
        'is-email' => 
        array (
        'slug' => 'is-email',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2009,
        'canonical_url' => 'https://lab.artlung.com/is-email/',
        'title' => 'isEmail() aka is_email() in PHP',
        'tags' => 
        array (
        0 => 'php',
        ),
        ),
        'java-tags' => 
        array (
        'slug' => 'java-tags',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 1999,
        'canonical_url' => 'https://lab.artlung.com/java-tags/',
        'title' => 'Java Tags 1999',
        'tags' => 
        array (
        ),
        ),
        'keycode' => 
        array (
        'slug' => 'keycode',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2011,
        'canonical_url' => 'https://lab.artlung.com/keycode/',
        'title' => 'Listen for Key Presses on a Web Page',
        'tags' => 
        array (
        ),
        ),
        'keystroke-to-go-to-random-page' => 
        array (
        'slug' => 'keystroke-to-go-to-random-page',
        'year' => 2024,
        'title' => 'Keystroke to Go to Random Web Page',
        'canonical_url' => 'https://lab.artlung.com/keystroke-to-go-to-random-page/',
        'tags' => 
        array (
        ),
        ),
        'larger-checkbox-with-css' => 
        array (
        'slug' => 'larger-checkbox-with-css',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2009,
        'canonical_url' => 'https://lab.artlung.com/larger-checkbox-with-css/',
        'title' => 'Larger Checkbox with CSS',
        'tags' => 
        array (
        0 => 'css',
        ),
        ),
        'make-unique-id' => 
        array (
        'slug' => 'make-unique-id',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2005,
        'canonical_url' => 'https://lab.artlung.com/make-unique-id/',
        'title' => 'Make a Unique ID in PHP',
        'tags' => 
        array (
        0 => 'php',
        ),
        ),
        'mathml' => 
        array (
        'slug' => 'mathml',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2024,
        'canonical_url' => 'https://lab.artlung.com/mathml/',
        'title' => 'MathML Test Page',
        'tags' => 
        array (
        ),
        ),
        'meaningful-html-class-names' => 
        array (
        'slug' => 'meaningful-html-class-names',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2024,
        'canonical_url' => 'https://lab.artlung.com/meaningful-html-class-names/',
        'title' => 'What CSS class names are semantically meaningful?',
        'tags' => 
        array (
        0 => 'css',
        1 => 'html',
        ),
        ),
        'media' => 
        array (
        'slug' => 'media',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2024,
        'canonical_url' => 'https://lab.artlung.com/media/',
        'title' => 'What to do with a directory of images that are letters?',
        'tags' => 
        array (
        ),
        ),
        'misc-files' => 
        array (
        'slug' => 'misc-files',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2016,
        'canonical_url' => 'https://lab.artlung.com/misc-files/',
        'title' => 'Miscellaneous Web Files',
        'tags' => 
        array (
        ),
        ),
        'mm_validateform' => 
        array (
        'slug' => 'mm_validateform',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2009,
        'canonical_url' => 'https://lab.artlung.com/mm_validateform/',
        'title' => 'MM_validateForm() and MM_findObj() functions',
        'tags' => 
        array (
        ),
        ),
        'modify-the-box' => 
        array (
        'slug' => 'modify-the-box',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2001,
        'canonical_url' => 'https://lab.artlung.com/modify-the-box/',
        'title' => 'Modify The Box (dhtml experiment, 2001)',
        'tags' => 
        array (
        0 => 'html',
        ),
        ),
        'mouseover-vote' => 
        array (
        'slug' => 'mouseover-vote',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 1999,
        'canonical_url' => 'https://lab.artlung.com/mouseover-vote/',
        'title' => 'Mouseover Vote Thing JavaScript',
        'tags' => 
        array (
        0 => 'javascript',
        ),
        ),
        'mouseover-vote100' => 
        array (
        'slug' => 'mouseover-vote100',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 1999,
        'canonical_url' => 'https://lab.artlung.com/mouseover-vote100/',
        'title' => 'Mouseover Vote Thing x 100',
        'tags' => 
        array (
        ),
        ),
        'multiple-select' => 
        array (
        'slug' => 'multiple-select',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 1999,
        'canonical_url' => 'https://lab.artlung.com/multiple-select/',
        'title' => 'Multiple, Hierarchical SelectBoxes',
        'tags' => 
        array (
        ),
        ),
        'multiple-select-v2' => 
        array (
        'slug' => 'multiple-select-v2',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2008,
        'canonical_url' => 'https://lab.artlung.com/multiple-select-v2/',
        'title' => 'Multiple, Hierarchical SelectBoxes, version 2',
        'tags' => 
        array (
        ),
        ),
        'museum' => 
        array (
        'slug' => 'museum',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2010,
        'canonical_url' => 'https://lab.artlung.com/museum/',
        'title' => 'Museum Notes (2010)',
        'tags' => 
        array (
        ),
        ),
        'my-first-vbscript-class' => 
        array (
        'slug' => 'my-first-vbscript-class',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2016,
        'canonical_url' => 'https://lab.artlung.com/my-first-vbscript-class/',
        'title' => 'My first VBScript Test Class',
        'tags' => 
        array (
        0 => 'vbscript',
        ),
        ),
        'navigation-function-vs-asp' => 
        array (
        'slug' => 'navigation-function-vs-asp',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2006,
        'canonical_url' => 'https://lab.artlung.com/navigation-function-vs-asp/',
        'title' => 'Navigation Function (in PHP and ASP)',
        'tags' => 
        array (
        0 => 'asp',
        1 => 'php',
        ),
        ),
        'navigator-language' => 
        array (
        'slug' => 'navigator-language',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2012,
        'canonical_url' => 'https://lab.artlung.com/navigator-language/',
        'title' => 'JavaScript: navigator.language',
        'tags' => 
        array (
        0 => 'javascript',
        ),
        ),
        'navigator-object' => 
        array (
        'slug' => 'navigator-object',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2010,
        'canonical_url' => 'https://lab.artlung.com/navigator-object/',
        'title' => 'What\'s in the Navigator object?',
        'tags' => 
        array (
        ),
        ),
        'nonsense-dtd' => 
        array (
        'slug' => 'nonsense-dtd',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2011,
        'canonical_url' => 'https://lab.artlung.com/nonsense-dtd/',
        'title' => 'nonsense-dtd',
        'tags' => 
        array (
        ),
        ),
        'not-valid-itunes-library' => 
        array (
        'slug' => 'not-valid-itunes-library',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2004,
        'canonical_url' => 'https://lab.artlung.com/not-valid-itunes-library/',
        'title' => 'iTunes Error: The iTunes Music Library file cannot be read because it does not appear to be a valid library file',
        'tags' => 
        array (
        ),
        ),
        'notifications' => 
        array (
        'slug' => 'notifications',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2010,
        'canonical_url' => 'https://lab.artlung.com/notifications/',
        'title' => 'window.webkitNotifications support',
        'tags' => 
        array (
        ),
        ),
        'now-getdate' => 
        array (
        'slug' => 'now-getdate',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2017,
        'canonical_url' => 'https://lab.artlung.com/now-getdate/',
        'title' => 'NOW() ~= GETDATE()',
        'tags' => 
        array (
        ),
        ),
        'oncontextmenu' => 
        array (
        'slug' => 'oncontextmenu',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2005,
        'canonical_url' => 'https://lab.artlung.com/oncontextmenu/',
        'title' => 'Demonstration of oncontextmenu',
        'tags' => 
        array (
        ),
        ),
        'onunload-window-open-evil' => 
        array (
        'slug' => 'onunload-window-open-evil',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2001,
        'canonical_url' => 'https://lab.artlung.com/onunload-window-open-evil/',
        'title' => 'onunload + window.open = evil',
        'tags' => 
        array (
        ),
        ),
        'open-graph-protocol-tools' => 
        array (
        'slug' => 'open-graph-protocol-tools',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2010,
        'canonical_url' => 'https://lab.artlung.com/open-graph-protocol-tools/',
        'title' => 'Open Graph Protocol Tools WordPress plugin',
        'tags' => 
        array (
        ),
        ),
        'outbound-link-confirmation' => 
        array (
        'slug' => 'outbound-link-confirmation',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2013,
        'canonical_url' => 'https://lab.artlung.com/outbound-link-confirmation/',
        'title' => 'Outbound Link Confirmation',
        'tags' => 
        array (
        ),
        ),
        'password-maker' => 
        array (
        'slug' => 'password-maker',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2009,
        'canonical_url' => 'https://lab.artlung.com/password-maker/',
        'title' => '20 Random Alphanumeric Passwords',
        'tags' => 
        array (
        ),
        ),
        'php-all-websafe' => 
        array (
        'slug' => 'php-all-websafe',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2010,
        'canonical_url' => 'https://lab.artlung.com/php-all-websafe/',
        'title' => 'Generate All Websafe Colors with PHP',
        'tags' => 
        array (
        0 => 'php',
        ),
        ),
        'php-php3-mod-rewrite' => 
        array (
        'slug' => 'php-php3-mod-rewrite',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2001,
        'canonical_url' => 'https://lab.artlung.com/php-php3-mod-rewrite/',
        'title' => 'How to make .php files masquerade as .php3',
        'tags' => 
        array (
        0 => 'php',
        ),
        ),
        'pinkvalidation' => 
        array (
        'slug' => 'pinkvalidation',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2002,
        'canonical_url' => 'https://lab.artlung.com/pinkvalidation/',
        'title' => 'Changing the color of a form element when it\'s blank',
        'tags' => 
        array (
        ),
        ),
        'plus-plus-a-string-php' => 
        array (
        'slug' => 'plus-plus-a-string-php',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2024,
        'canonical_url' => 'https://lab.artlung.com/plus-plus-a-string-php/',
        'title' => 'plusplus (++) a string in php',
        'tags' => 
        array (
        0 => 'php',
        ),
        ),
        'quick-jquery-overlay' => 
        array (
        'slug' => 'quick-jquery-overlay',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2018,
        'canonical_url' => 'https://lab.artlung.com/quick-jquery-overlay/',
        'title' => 'Quick jQuery Overlay',
        'tags' => 
        array (
        0 => 'javascript',
        ),
        ),
        'quote-to-dl' => 
        array (
        'slug' => 'quote-to-dl',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2024,
        'canonical_url' => 'https://lab.artlung.com/quote-to-dl/',
        'title' => 'Quote to DL (Definition List)',
        'tags' => 
        array (
        ),
        ),
        'random-cells' => 
        array (
        'slug' => 'random-cells',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2010,
        'canonical_url' => 'https://lab.artlung.com/random-cells/',
        'title' => 'Generate a Random String!',
        'tags' => 
        array (
        ),
        ),
        'random-content' => 
        array (
        'slug' => 'random-content',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2001,
        'canonical_url' => 'https://lab.artlung.com/random-content/',
        'title' => 'Random Content',
        'tags' => 
        array (
        ),
        ),
        'random-string-in-sql' => 
        array (
        'slug' => 'random-string-in-sql',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2000,
        'canonical_url' => 'https://lab.artlung.com/random-string-in-sql/',
        'title' => 'Random String in SQL',
        'tags' => 
        array (
        0 => 'sql',
        ),
        ),
        'recursive-iframe' => 
        array (
        'slug' => 'recursive-iframe',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2009,
        'canonical_url' => 'https://lab.artlung.com/recursive-iframe/',
        'title' => 'This page calls an iframe which calls itself. The question, is what happens?',
        'tags' => 
        array (
        ),
        ),
        'response-end-is-like-exit-in-php' => 
        array (
        'slug' => 'response-end-is-like-exit-in-php',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2016,
        'canonical_url' => 'https://lab.artlung.com/response-end-is-like-exit-in-php/',
        'title' => 'In ASP, Response.End is like exit() in PHP',
        'tags' => 
        array (
        0 => 'asp',
        1 => 'php',
        ),
        ),
        'reverse-string-nums' => 
        array (
        'slug' => 'reverse-string-nums',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2001,
        'canonical_url' => 'https://lab.artlung.com/reverse-string-nums/',
        'title' => 'Reverse a string, but only the digits',
        'tags' => 
        array (
        ),
        ),
        'robots-nocontent' => 
        array (
        'slug' => 'robots-nocontent',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2008,
        'canonical_url' => 'https://lab.artlung.com/robots-nocontent/',
        'title' => 'Robots-Nocontent (2008)',
        'tags' => 
        array (
        ),
        ),
        'rosetta' => 
        array (
        'slug' => 'rosetta',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2010,
        'canonical_url' => 'https://lab.artlung.com/rosetta/',
        'title' => 'Artlung Rosetta: Comparing dojo, Ext, Glow, jQuery, MooTools & Prototype',
        'tags' => 
        array (
        0 => 'javascript',
        ),
        ),
        'rounded-mozilla' => 
        array (
        'slug' => 'rounded-mozilla',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2024,
        'canonical_url' => 'https://lab.artlung.com/rounded-mozilla/',
        'title' => 'Mozilla CSS Extensions',
        'tags' => 
        array (
        0 => 'css',
        ),
        ),
        'rtf' => 
        array (
        'slug' => 'rtf',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2024,
        'canonical_url' => 'https://lab.artlung.com/rtf/',
        'title' => 'Make an RTF Document with PHP',
        'tags' => 
        array (
        0 => 'php',
        ),
        ),
        'screen-resolutions' => 
        array (
        'slug' => 'screen-resolutions',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2012,
        'canonical_url' => 'https://lab.artlung.com/screen-resolutions/',
        'title' => 'Compared Mobile Screen Resolutions (old)',
        'tags' => 
        array (
        ),
        ),
        'self-refresh' => 
        array (
        'slug' => 'self-refresh',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2008,
        'canonical_url' => 'https://lab.artlung.com/self-refresh/',
        'title' => 'Code to make a page that refresh to itself',
        'tags' => 
        array (
        ),
        ),
        'server-side-image-map' => 
        array (
        'slug' => 'server-side-image-map',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2024,
        'canonical_url' => 'https://lab.artlung.com/server-side-image-map/',
        'title' => 'Server Side Image Map',
        'tags' => 
        array (
        ),
        ),
        'single-pixel-gif' => 
        array (
        'slug' => 'single-pixel-gif',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2011,
        'canonical_url' => 'https://lab.artlung.com/single-pixel-gif/',
        'title' => 'Single Pixel Gif as a base 64 encoded string',
        'tags' => 
        array (
        ),
        ),
        'six-finger-ai-hand' => 
        array (
        'slug' => 'six-finger-ai-hand',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2024,
        'canonical_url' => 'https://lab.artlung.com/six-finger-ai-hand/',
        'title' => 'Six Finger AI Hand (as Slack Emoji)',
        'tags' => 
        array (
        ),
        ),
        'slideshow' => 
        array (
        'slug' => 'slideshow',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2003,
        'canonical_url' => 'https://lab.artlung.com/slideshow/',
        'title' => 'SlideShow Implementation',
        'tags' => 
        array (
        ),
        ),
        'slideshow-img' => 
        array (
        'slug' => 'slideshow-img',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 1999,
        'canonical_url' => 'https://lab.artlung.com/slideshow-img/',
        'title' => 'Slideshows Roughly How We did them in 1999',
        'tags' => 
        array (
        ),
        ),
        'slideshow-plus' => 
        array (
        'slug' => 'slideshow-plus',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2003,
        'canonical_url' => 'https://lab.artlung.com/slideshow-plus/',
        'title' => 'slideshow plus! cleaner slideshow which can also move forward automatically',
        'tags' => 
        array (
        ),
        ),
        'speech-synthesis' => 
        array (
        'slug' => 'speech-synthesis',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2024,
        'canonical_url' => 'https://lab.artlung.com/speech-synthesis/',
        'title' => 'Speech Synthesis',
        'tags' => 
        array (
        ),
        ),
        'spoiler' => 
        array (
        'slug' => 'spoiler',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2024,
        'canonical_url' => 'https://lab.artlung.com/spoiler/',
        'title' => 'Spoiler Widget',
        'tags' => 
        array (
        ),
        ),
        'sql-server-collations' => 
        array (
        'slug' => 'sql-server-collations',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2011,
        'canonical_url' => 'https://lab.artlung.com/sql-server-collations/',
        'title' => 'Show all SQL Server Collations',
        'tags' => 
        array (
        0 => 'sql',
        ),
        ),
        't-paamayim-nekudotayim' => 
        array (
        'slug' => 't-paamayim-nekudotayim',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2016,
        'canonical_url' => 'https://lab.artlung.com/t-paamayim-nekudotayim/',
        'title' => 'syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM',
        'tags' => 
        array (
        ),
        ),
        'the-problem-with-blur' => 
        array (
        'slug' => 'the-problem-with-blur',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2001,
        'canonical_url' => 'https://lab.artlung.com/the-problem-with-blur/',
        'title' => 'Why not to use blur() to make dotted lines go away in MSIE for Windows',
        'tags' => 
        array (
        ),
        ),
        'three-char-combos' => 
        array (
        'slug' => 'three-char-combos',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2006,
        'canonical_url' => 'https://lab.artlung.com/three-char-combos/',
        'title' => 'Permutations of a set of characters',
        'tags' => 
        array (
        ),
        ),
        'tips-2001' => 
        array (
        'slug' => 'tips-2001',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2001,
        'canonical_url' => 'https://lab.artlung.com/tips-2001/',
        'title' => 'Random HTML Tips',
        'tags' => 
        array (
        0 => 'html',
        ),
        ),
        'tr-onmouseover-style' => 
        array (
        'slug' => 'tr-onmouseover-style',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 1999,
        'canonical_url' => 'https://lab.artlung.com/tr-onmouseover-style/',
        'title' => 'onMouseover in a TR tag',
        'tags' => 
        array (
        0 => 'javascript',
        ),
        ),
        'undocumented-linklint' => 
        array (
        'slug' => 'undocumented-linklint',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2002,
        'canonical_url' => 'https://lab.artlung.com/undocumented-linklint/',
        'title' => 'Undocumented Linklint JavaScript Feature',
        'tags' => 
        array (
        0 => 'javascript',
        ),
        ),
        'unix-batch-file-rename' => 
        array (
        'slug' => 'unix-batch-file-rename',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2004,
        'canonical_url' => 'https://lab.artlung.com/unix-batch-file-rename/',
        'title' => 'Batch File Rename By File Extension in Unix',
        'tags' => 
        array (
        0 => 'unix',
        ),
        ),
        'upload' => 
        array (
        'slug' => 'upload',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2015,
        'canonical_url' => 'https://lab.artlung.com/upload/',
        'title' => 'Sample Uploader Code',
        'tags' => 
        array (
        ),
        ),
        'url-compare' => 
        array (
        'slug' => 'url-compare',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2024,
        'canonical_url' => 'https://lab.artlung.com/url-compare/',
        'title' => 'Compare Two URLs',
        'tags' => 
        array (
        ),
        ),
        'urlencode' => 
        array (
        'slug' => 'urlencode',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2001,
        'canonical_url' => 'https://lab.artlung.com/urlencode/',
        'title' => 'How to Encode URLs / An ASCII to URLEncoded JavaScript',
        'tags' => 
        array (
        0 => 'javascript',
        ),
        ),
        'user-preference-for-new-windows' => 
        array (
        'slug' => 'user-preference-for-new-windows',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2004,
        'canonical_url' => 'https://lab.artlung.com/user-preference-for-new-windows/',
        'title' => 'Giving Users A Preference Widget for Opening New Windows',
        'tags' => 
        array (
        ),
        ),
        'vaguely-interesting-layout' => 
        array (
        'slug' => 'vaguely-interesting-layout',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2010,
        'canonical_url' => 'https://lab.artlung.com/vaguely-interesting-layout/',
        'title' => 'Vaguely Interesting Layout',
        'tags' => 
        array (
        ),
        ),
        'validate-checkbox' => 
        array (
        'slug' => 'validate-checkbox',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2001,
        'canonical_url' => 'https://lab.artlung.com/validate-checkbox/',
        'title' => 'Only submit if at least one checkbox is checked',
        'tags' => 
        array (
        ),
        ),
        'validate-image' => 
        array (
        'slug' => 'validate-image',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2002,
        'canonical_url' => 'https://lab.artlung.com/validate-image/',
        'title' => 'How do I validate a form when the form has an image as submit?',
        'tags' => 
        array (
        ),
        ),
        'vbscript-always-elseif-never-else-if' => 
        array (
        'slug' => 'vbscript-always-elseif-never-else-if',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2016,
        'canonical_url' => 'https://lab.artlung.com/vbscript-always-elseif-never-else-if/',
        'title' => 'In VBScript, It\'s always "Elseif" and never "Else If"',
        'tags' => 
        array (
        0 => 'vbscript',
        ),
        ),
        'w3c-with-and-without-css' => 
        array (
        'slug' => 'w3c-with-and-without-css',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2002,
        'canonical_url' => 'https://lab.artlung.com/w3c-with-and-without-css/',
        'title' => 'How Powerful is CSS?',
        'tags' => 
        array (
        0 => 'css',
        ),
        ),
        'windows-export-file-list' => 
        array (
        'slug' => 'windows-export-file-list',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2000,
        'canonical_url' => 'https://lab.artlung.com/windows-export-file-list/',
        'title' => 'How to Make a file with every file on a C:\\ drive (Windows)',
        'tags' => 
        array (
        ),
        ),
        'ws-ftp-password-decoder' => 
        array (
        'slug' => 'ws-ftp-password-decoder',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2001,
        'canonical_url' => 'https://lab.artlung.com/ws-ftp-password-decoder/',
        'title' => 'WS_FTP JavaScript Password Decoder',
        'tags' => 
        array (
        0 => 'javascript',
        ),
        ),
        'xml-encode' => 
        array (
        'slug' => 'xml-encode',
        'og-image-date' => '2024-12-17 01:21:10',
        'year' => 2009,
        'canonical_url' => 'https://lab.artlung.com/xml-encode/',
        'title' => 'xml_encode()',
        'tags' => 
        array (
        ),
        ),
        );
        /* END: handled by php generate-nav-value */


    }


}




