<?php
namespace ArtlungLab;
/**
 * Class Years
 *
 * @category PHP
 * @package  Classes
 * @author   Joe Crawford <joe@artlung.com>
 * @license  GPL 2.0+ - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version  Release: 1.0
 * @link     https://artlung.com/
 * @since    2024-12-03
 */
class Years
{
    const DEFAULT_YEAR = false;

    /**
     * Return the years updated of the pages
     *
     * @deprecated
     *
     * @return int[]
     */
    public static function slugsAndYears()
    {
        return array(
            '50states' => 2003,
            'a-outline-none' => 2001,
            'additive-font-size' => 2001,
            'ancient-tidy-tutorial' => 1999,
            'anti-cache' => 2001,
            'asp' => 2001,
            'asp-selectbox-function' => 2016,
            'autocalc' => 2002,
            'bluedragon-net-installer' => 2010,
            'border-style' => 2002,
            'call-original-version-of-redefined-vbscript' => 2016,
            'camel-selector' => 2002,
            'spoiler' => 2024,
            'checkbox-validate' => 2001,
            'clock-concept' => 2024,
            'coldfusion-break-db' => 2003,
            'coldfusion-force-download' => 2016,
            'coldfusion-titlecase' => 2003,
            'compare-fields' => 2002,
            'connect-to-remote-server' => 2004,
            'copy-to-clipboard-javascript' => 2005,
            'countdown' => 2005,
            'countdown-daily-to-a-time' => 2011,
            'countdown-to-the-first' => 2011,
            'crossdomain' => 2009,
            'css3-smiley' => 2024,
            'detection-real' => 1999,
            'domain-name-sql-excel' => 2016,
            'dropdown-focus' => 2001,
            'dropdown-only-some-new-window' => 2002,
            'email-submission-stinks' => 2003,
            'first-child-last-child' => 2011,
            'gallery' => 2001,
            'gettysburg' => 2006,
            'goal50' => 2024,
            'group-concat-mysql' => 2016,
            'image-border' => 1999,
            'image-hover' => 2004,
            'input-direction' => 2006,
            'interesting-date-layout' => 1999,
            'invisible-unspiderable-link' => 2024,
            'is-email' => 2009,
            'java-tags' => 1999,
            'keycode' => 2011,
            'larger-checkbox-with-css' => 2009,
            'make-unique-id' => 2005,
            'mathml' => 2024,
            'meaningful-html-class-names' => 2024,
            'media' => 2024,
            'misc-files' => 2016,
            'mm_validateform' => 2009,
            'modify-the-box' => 2001,
            'mouseover-vote' => 1999,
            'mouseover-vote100' => 1999,
            'museum' => 2010,
            'my-first-vbscript-class' => 2016,
            'not-valid-itunes-library' => 2004,
            'oncontextmenu' => 2005,
            'onunload-window-open-evil' => 2001,
            'outbound-link-confirmation' => 2013,
            'password-maker' => 2009,
            'php-all-websafe' => 2010,
            'php-php3-mod-rewrite' => 2001,
            'pinkvalidation' => 2002,
            'plus-plus-a-string-php' => 2024,
            'quick-jquery-overlay' => 2018,
            'quote-to-dl' => 2024,
            'random-string-in-sql' => 2000,
            'response-end-is-like-exit-in-php' => 2016,
            'robots-nocontent' => 2008,
            'rounded-mozilla' => 2024,
            't-paamayim-nekudotayim' => 2016,
            'the-problem-with-blur' => 2001,
            'undocumented-linklint' => 2002,
            'unix-batch-file-rename' => 2004,
            'url-compare' => 2024,
            'urlencode' => 2001,
            'user-preference-for-new-windows' => 2004,
            'vaguely-interesting-layout' => 2010,
            'validate-checkbox' => 2001,
            'validate-image' => 2002,
            'vbscript-always-elseif-never-else-if' => 2016,
            'w3c-with-and-without-css' => 2002,
            'windows-export-file-list' => 2000,
            'ws-ftp-password-decoder' => 2001,
            'xml-encode' => 2009,
            'single-pixel-gif' => 2011,
            'asp-cdonts' => 2005,
            'bug-mac-netscape-forms-update' => 1998,
            'change-space-between-paragraphs' => 2006,
            'format-time' => 2002,
            'rtf' => 2024,
            'history' => 1999,
            'html-2.0' => 2001,
            'recursive-iframe' => 2009,
            'reverse-string-nums' => 2001,
            'random-content' => 2001,
            'open-graph-protocol-tools' => 2010,
            'slideshow-img' => 1999,
            'multiple-select' => 1999,
            'tr-onmouseover-style' => 1999,
            'barcampla6' => 2008,
            'change-document-background-color' => 1999,
            'three-char-combos' => 2006,
            'dropdown' => 2004,
            'ArtLung-Notes' => 2010,
            'bloggingbot' => 2018,
            'blur' => 2004,
            'bookmarklets' => 2006,
            'buttonybutton' => 2015,
            'buttonybuttonsonbuttons' => 2015,
            'canvas-html-render-download' => 2024,
            'change-all-links' => 2000,
            'change-content-in-iframe-with-prototype' => 2010,
            'circles-crawl' => 2010,
            'detagger' => 2005,
            'display-inline-block' => 2009,
            'dropdown-frames' => 2008,
            'dropdown-submit-form' => 2008,
            'echo-http-host' => 2008,
            'font-awesome-sample' => 2017,
            'form-image-background' => 2005,
            'frames-mouseover' => 2004,
            'generic-validator' => 2004,
            'multiple-select-v2' => 2008,
            'navigation-function-vs-asp' => 2006,
            'navigator-language' => 2012,
            'navigator-object' => 2010,
            'nonsense-dtd' => 2011,
            'notifications' => 2010,
            'now-getdate' => 2017,
            'random-cells' => 2010,
            'screen-resolutions' => 2012,
            'self-refresh' => 2008,
            'server-side-image-map' => 2024,
            'six-finger-ai-hand' => 2024,
            'slideshow' => 2003,
            'speech-synthesis' => 2024,
            'sql-server-collations' => 2011,
            'tips-2001' => 2001,
            'upload' => 2015,
            'rosetta' => 2010,
            'slideshow-plus' => 2003,
            'keystroke-to-go-to-random-page' => 2024,

        );
    }
}