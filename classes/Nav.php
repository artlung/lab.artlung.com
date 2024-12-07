<?php

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
        $slugs_and_titles = [
            'clock-concept' => ['title' => 'Clock Concept (1998-2024)'],
            'detection-real' => ['title' => 'RealMedia Plugin Detection'],
            '50states' => ['title' => '50 U.S. States Dropdown Box HTML Code Snippets'],
            'ArtLung-Notes' => ['title' => 'ArtLung Notes (Experimental, 2010)'],
            'a-outline-none' => ['title' => 'outline:none to affect IE5/Mac focus outline'],
            'additive-font-size' => ['title' => 'How font-size accumulates'],
            'ancient-tidy-tutorial' => ['title' => 'Ancient HTML Tidy Tutorial'],
            'anti-cache' => ['title' => 'Preventing Browser Cache'],
            'asp' => ['title' => 'ASP Hello World Script'],
            'asp-cdonts' => ['title' => 'ASP: CDONTS snippet'],
            'asp-selectbox-function' => ['title' => 'selectBox function in Traditional ASP'],
            'autocalc' => ['title' => 'Auto-Calculator'],
            'barcampla6' => ['title' => 'jQuery Basics (barcampla6)'],
            'bluedragon-net-installer' => ['title' => 'Screenshots of an installation of BlueDragon 7.1 for the Microsoft .NET Framework'],
            'bloggingbot' => ['title' => 'Blogging Bot (Markov Chains are Hilarious)'],
            'blur' => ['title' => 'CSS Blur Example'],
            'bookmarklets' => ['title' => 'Killer Bookmarklets I have Come Across'],
            'border-style' => ['title' => 'border-style Experiment'],
            'bug-mac-netscape-forms-update' => ['title' => 'Netscape/Macintosh Changing Form Button or Submit Input Value Fails'],
            'buttonybutton' => ['title' => 'Buttony Button'],
            'buttonybuttonsonbuttons' => ['title' => 'Big Buttony Buttons on Buttons'],
            'call-original-version-of-redefined-vbscript' => ['title' => 'Call the native version of a VBScript object'],
            'camel-selector' => ['title' => 'camelCase <-> selector-case w/o Regex'],
            'change-all-links' => ['title' => 'How can I change every link on a page to something new?'],
            'change-content-in-iframe-with-prototype' => ['title' => 'What is the way to access IFrame\'s element using Prototype $ method?'],
            'change-document-background-color' => ['title' => 'Change document background color'],
            'change-space-between-paragraphs' => ['title' => 'Changing the spacing between paragraphs'],
            'checkbox-validate' => ['title' => 'Checkbox Validator'],
            'circles-crawl' => ['title' => 'Circles Crawl and you click them (jQuery)'],
            'coldfusion-break-db' => ['title' => 'Ways to break a lock on an Access Database with Cold Fusion'],
            'coldfusion-force-download' => ['title' => 'ColdFusion: Force Download of File'],
            'coldfusion-titlecase' => ['title' => 'ColdFusion TitleCase Function'],
            'compare-fields' => ['title' => 'Compare two fields, Submit only if they are the same:'],
            'connect-to-remote-server' => ['title' => 'Simple example connecting to a remote server'],
            'copy-to-clipboard-javascript' => ['title' => 'Copy to Clipboard JavaScript'],
            'countdown' => ['title' => 'Super Simple Countdown in PHP.'],
            'countdown-daily-to-a-time' => ['title' => 'Countdown to a time of the day every day (PHP)'],
            'countdown-to-the-first' => ['title' => 'Countdown in to the first of the month in PHP'],
            'crossdomain' => ['title' => 'crossdomain.xml'],
            'css3-smiley' => ['title' => 'CSS3 Smiley in Color'],
            'detagger' => ['title' => 'Fun Detagger Script'],
            'domain-name-sql-excel' => ['title' => 'Extract Domain Names from a list of email addresses'],
            'url-compare' => ['title' => 'Compare Two URLs'],
            'dropdown' => ['title' => 'Dropdown Navigation'],
            'dropdown-focus' => ['title' => 'Setting Dropdown Focus'],
            'dropdown-frames' => ['title' => 'Dropdown Navigation in Frames'],
            'dropdown-only-some-new-window' => ['title' => 'Dropdown Navigation Where Only Some Links Open New Windows'],
            'dropdown-submit-form' => ['title' => 'dropdown-submit-form'],
            'echo-http-host' => ['title' => 'HTTP_HOST environment variable in PHP'],
            'email-submission-stinks' => ['title' => 'Form action mailto: stinks'],
            'font-awesome-sample' => ['title' => 'Font Awesome 4.6.3 Class Explorer (version 4.6.3)'],
            'first-child-last-child' => ['title' => 'First Child Last Child Demonstration'],
            'form-image-background' => ['title' => 'background images in form elements'],
            'format-time' => ['title' => 'JavaScript Date Formatting Demo'],
            'frames-mouseover' => ['title' => 'frames-mouseover'],
            'gallery' => ['title' => 'AutoMagic Gallery Listing'],
            'generic-validator' => ['title' => 'Generic Validator'],
            'gettysburg' => ['title' => 'Gettysburg Address in HTML Buttons'],
            'goal50' => ['title' => 'Goal of 50!'],
            'group-concat-mysql' => ['title' => 'Using GROUP_CONCAT()'],
            'history' => ['title' => 'How to implement a Forward and Back Buttons'],
            'html-2.0' => ['title' => 'HTML 2.0 - An exploration!'],
            'image-border' => ['title' => 'Several Approaches to Do Image Borders of Different Colors: 1999'],
            'image-hover' => ['title' => 'Image Hover'],
            'input-direction' => ['title' => 'Change Form Input Direction'],
            'interesting-date-layout' => ['title' => 'interesting-date-layout'],
            'invisible-unspiderable-link' => ['title' => 'Invisible Unspiderable Link'],
            'is-email' => ['title' => 'isEmail() aka is_email() in PHP'],
            'java-tags' => ['title' => 'Java Tags 1999'],
            'larger-checkbox-with-css' => ['title' => 'Larger Checkbox with CSS'],
            'make-unique-id' => ['title' => 'Make a Unique ID in PHP'],
            'meaningful-html-class-names' => ['title' => 'What CSS class names are semantically meaningful?'],
            'misc-files' => ['title' => 'Miscellaneous Web Files'],
            'mm_validateform' => ['title' => 'MM_validateForm() and MM_findObj() functions'],
            'modify-the-box' => ['title' => 'Modify The Box (dhtml experiment, 2001)'],
            'mouseover-vote' => ['title' => 'Mouseover Vote Thing JavaScript'],
            'mouseover-vote100' => ['title' => 'Mouseover Vote Thing x 100'],
            'multiple-select' => ['title' => 'Multiple, Hierarchical SelectBoxes'],
            'multiple-select-v2' => ['title' => 'Multiple, Hierarchical SelectBoxes, version 2'],
            'museum' => ['title' => 'Museum Notes (2010)'],
            'my-first-vbscript-class' => ['title' => 'My first VBScript Test Class'],
            'navigation-function-vs-asp' => ['title' => 'Navigation Function (in PHP and ASP)'],
            'navigator-language' => ['title' => 'JavaScript: navigator.language'],
            'navigator-object' => ['title' => 'What\'s in the Navigator object?'],
            'nonsense-dtd' => ['title' => 'nonsense-dtd'],
            'not-valid-itunes-library' => ['title' => 'iTunes Error: The iTunes Music Library file cannot be read because it does not appear to be a valid library file'],
            'notifications' => ['title' => 'window.webkitNotifications support'],
            'now-getdate' => ['title' => 'NOW() ~= GETDATE()'],
            'oncontextmenu' => ['title' => 'Demonstration of oncontextmenu'],
            'onunload-window-open-evil' => ['title' => 'onunload + window.open = evil'],
            'open-graph-protocol-tools' => ['title' => 'Open Graph Protocol Tools WordPress plugin'],
            'outbound-link-confirmation' => ['title' => 'Outbound Link Confirmation'],
            'password-maker' => ['title' => '20 Random Alphanumeric Passwords'],
            'php-all-websafe' => ['title' => 'Generate All Websafe Colors with PHP'],
            'php-php3-mod-rewrite' => ['title' => 'How to make .php files masquerade as .php3'],
            'pinkvalidation' => ['title' => 'Changing the color of a form element when it\'s blank'],
            'plus-plus-a-string-php' => ['title' => 'plusplus (++) a string in php'],
            'random-cells' => ['title' => 'Generate a Random String!'],
            'quote-to-dl' => ['title' => 'Quote to DL (Definition List)'],
            'quick-jquery-overlay' => ['title' => 'Quick jQuery Overlay'],
            'random-content' => ['title' => 'Random Content'],
            'random-string-in-sql' => ['title' => 'Random String in SQL'],
            'recursive-iframe' => ['title' => 'This page calls an iframe which calls itself. The question, is what happens?'],
            'response-end-is-like-exit-in-php' => ['title' => 'In ASP, Response.End is like exit() in PHP'],
            'reverse-string-nums' => ['title' => 'Reverse a string, but only the digits'],
            'rosetta' => ['title' => 'Artlung Rosetta: Comparing dojo, Ext, Glow, jQuery, MooTools & Prototype'],
            'rounded-mozilla' => ['title' => 'Mozilla CSS Extensions'],
            'rtf' => ['title' => 'Make an RTF Document with PHP'],
            'screen-resolutions' => ['title' => 'Compared Mobile Screen Resolutions (old)'],
            'self-refresh' => ['title' => 'Code to make a page that refresh to itself'],
            'single-pixel-gif' => ['title' => 'Single Pixel Gif as a base 64 encoded string'],
            'slideshow' => ['title' => 'SlideShow Implementation'],
            'slideshow-plus' => ['title' => 'slideshow plus! cleaner slideshow which can also move forward automatically'],
            'sql-server-collations' => ['title' => 'Show all SQL Server Collations'],
            't-paamayim-nekudotayim' => ['title' => 'syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM'],
            'the-problem-with-blur' => ['title' => 'Why not to use blur() to make dotted lines go away in MSIE for Windows'],
            'three-char-combos' => ['title' => 'Permutations of a set of characters'],
            'tips-2001' => ['title' => 'Random HTML Tips'],
            'tr-onmouseover-style' => ['title' => 'onMouseover in a TR tag'],
            'undocumented-linklint' => ['title' => 'Undocumented Linklint JavaScript Feature'],
            'unix-batch-file-rename' => ['title' => 'Batch File Rename By File Extension in Unix'],
            'urlencode' => ['title' => 'How to Encode URLs / An ASCII to URLEncoded JavaScript'],
            'user-preference-for-new-windows' => ['title' => 'Giving Users A Preference Widget for Opening New Windows'],
            'vaguely-interesting-layout' => ['title' => 'Vaguely Interesting Layout'],
            'validate-checkbox' => ['title' => 'Only submit if at least one checkbox is checked'],
            'validate-image' => ['title' => 'How do I validate a form when the form has an image as submit?'],
            'w3c-with-and-without-css' => ['title' => 'How Powerful is CSS?'],
            'windows-export-file-list' => ['title' => 'How to Make a file with every file on a C:\ drive (Windows)'],
            'ws-ftp-password-decoder' => ['title' => 'WS_FTP JavaScript Password Decoder'],
            'xml-encode' => ['title' => 'xml_encode()'],
            'speech-synthesis' => ['title' => 'Speech Synthesis'],
            'mathml' => ['title' => 'MathML Test Page'],
            'server-side-image-map' => ['title' => 'Server Side Image Map'],
            'six-finger-ai-hand' => ['title' => 'Six Finger AI Hand (as Slack Emoji)'],
            'vbscript-always-elseif-never-else-if' => ['title' => 'In VBScript, It\'s always "Elseif" and never "Else If"'],
            'display-inline-block' => ['title' => 'CSS workaround for external link with small icon (2007)'],
            'canvas-html-render-download' => ['title' => 'Canvas HTML Render Download not working'],
            'slideshow-img' => ['title' => 'Slideshows Roughly How We did them in 1999'],
            'robots-nocontent' => ['title' => 'Robots-Nocontent (2008)'],
            'media' => ['title' => 'What to do with a directory of images that are letters?'],
            'upload' => ['title' => 'Sample Uploader Code'],
            'keycode' => ['title' => 'Listen for Key Presses on a Web Page'],
        ];

        $slugs_and_years = Years::slugsAndYears();
        $ignored_slugs = self::ignoredDirectoryNames();

        foreach ($slugs_and_titles as $slug => $metadata) {
            if (array_key_exists($slug, $slugs_and_years)) {
                $slugs_and_titles[$slug]['year'] = $slugs_and_years[$slug];
            } else {
                $slugs_and_titles[$slug]['year'] = Years::DEFAULT_YEAR;
            }
            if (in_array($slug, $ignored_slugs)) {
                unset($slugs_and_titles[$slug]);
            }

        }
        return $slugs_and_titles;



    }

    /**
     * When reading the directories, ignore these items
     *
     * @return string[]
     */
    public static function ignoredDirectoryNames()
    {
        return [
            '.',
            '..',
            '.DS_Store',
            '.htaccess',
            '.well-known',
            'js',
        ];
    }


}


