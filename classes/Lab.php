<?php

/**
 * Class Lab
 *
 * @category PHP
 * @package  Classes
 * @author   Joe Crawford <joe@artlung.com>
 * @license  GPL 2.0+ - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version  Release: 1.0
 * @link     https://artlung.com/
 * @since    2024-12-03
 */
class Lab
{
    /**
     * To hold code extracted from code.txt
     *
     * @var string
     */
    public $code_from_code_txt;
    /**
     * Current Page Server Directory Path
     *
     * @var string
     */
    public $currentPageServerDirectoryPath;
    /**
     * Holds the directory name
     *
     * @var array|string|string[]|null
     */
    protected $_directoryName;
    /**
     * URL of the current page
     *
     * @var string
     */
    private $_url;

    /**
     * Set up the Lab object, which will put together relevant filesystem paths
     *
     * @var string
     */
    public function __construct()
    {

        $this->code_from_code_txt = '';
        $this->currentPageServerDirectoryPath = dirname(__FILE__) . '/../';

        // let's parse the current requested url
        $this->_url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        // /asp/index.php would be asp
        // /asp/ would be asp

        $this->_url = trim($this->_url, '/');
        $this->_directoryName = /* only the part before any slash */
            preg_replace('/\/.*/', '', $this->_url);

    }


    /**
     * Print a header with a title and options
     *
     * @param string $string
     * @param array  $options
     *
     * @return void
     */
    public function printHeader(string $string, array $options = [])
    {
        print $this->getHeader($string, $options);
    }

    /**
     * Get the slugs for the lab pages
     *
     * @return string[]
     */
    public function getLabPageSlugs()
    {
        return array_keys(Nav::getMetadata());
    }

    /**
     * Print a footer with options
     *
     * @param array $options
     *
     * @return void
     */
    public function printFooter(array $options = [])
    {
        print $this->_getFooter($options);
    }

    /**
     * Get the header with a title and options
     *
     * @param string $title
     * @param $options
     *
     * @return string
     */
    public function getHeader(string $title, $options = [])
    {

        $open_nav = $options['open-nav'] ?? false;


        $title = trim($title);

        $cssFileName = '2025.css';
        $cssPagesPath = 'pages/' . $cssFileName;
        $cssActualPath = $this->currentPageServerDirectoryPath . $cssPagesPath;
        $cacheBustCss = @filectime($cssActualPath) ? : 0;


        $jsFileName = '2025.js';
        $jsPagesPath = 'pages/' . $jsFileName;
        $jsActualPath = $this->currentPageServerDirectoryPath . $jsPagesPath;
        $cacheBustJs = @filectime($jsActualPath) ? : 0;


        $scriptNameMd5 = md5($_SERVER['SCRIPT_NAME']);
        $title = htmlspecialchars($title);

        $codePath = $this->currentPageServerDirectoryPath . 'pages/' . $this->_directoryName . '/code.txt';

        if (is_file($codePath)) {
            $code_from_code_txt = file_get_contents($codePath);
            $this->code_from_code_txt = $code_from_code_txt;
        } else {
            $code_from_code_txt = '<!-- no code.txt found -->';
        }

        if ($options['body-tag'] ?? false) {
            $bodyTag = $options['body-tag'];
        } else {
            $bodyTag = sprintf('<body id="%s">', $scriptNameMd5);
        }

        $navItems = Nav::getMetadata();
        uasort(
            $navItems, function ($a, $b) {
                return $b['year'] <=> $a['year'];
            }
        );

        $nav = '<ol>';
        foreach ($navItems as $slug => $navItem) {
            $url = '/' . $slug . '/';
            if ($navItem['year']) {
                $styleString = "--year: {$navItem['year']};";
            } else {
                $styleString = '';
            }
            $span = sprintf('<span class="disqus-comment-count" data-disqus-url="https://lab.artlung.com%s"></span>', $url);
            // TODO add no inspection here
            $anchor = sprintf('<a href="%s"><span>%s</span> %s</a>', $url, $navItem['title'], $span);
            $li = sprintf('<li style="%s" data-year="%s">%s</li>', $styleString, $navItem['year'], $anchor);
            $nav .= $li;
        }
        $nav .= '</ol>';

        $hamburger_emoji = '🍔';

        $shareOpenlyTitle = 'Share Openly';
        $pathOnly = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $url = 'https://lab.artlung.com' . $pathOnly;
        $text = '“' . $title . '” #ArtLungLab';

        // https://shareopenly.org/share/?url={URL}&text={TEXT}
        $shareOpenlyLink = 'https://shareopenly.org/share/' .
            '?url=' . urlencode($url) .
            '&text=' . urlencode($text);

        $open_nav_checked = $open_nav ? 'checked' : '';
        $currentYear = date('Y');


        return <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<style>:root {--currentYear: {$currentYear} }</style>
<link rel="stylesheet" href="/{$cssFileName}?b={$cacheBustCss}" type="text/css">
<link rel="webmention" href="https://webmention.io/artlung.com/webmention">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="/{$jsFileName}?{$cacheBustJs}"></script>
<!-- <script id="dsq-count-scr" src="https://lab-artlung-com.disqus.com/count.js" async></script> -->
<title>{$title} / ArtLung Lab</title>
{$code_from_code_txt}
</head>
{$bodyTag}
<header>
    <label>
    <input type="checkbox" id="nav-toggle" hidden {$open_nav_checked}>
    {$hamburger_emoji}
    </label>
    <a href="/" target="_top">ARTLUNG LAB</a>
    <a href="{$shareOpenlyLink}" target="_blank" title="{$shareOpenlyTitle}" class="share">Share</a>
</header>
<nav>
<div>
<input type="text" placeholder="Search" id="search-filter">
</div>
{$nav}
</nav>
<article id="content">
HTML;

    }

    /**
     * Get the footer with options
     *
     * @param $options
     *
     * @return string
     */
    private function _getFooter($options): string
    {

        $copyrightYear = date('Y');
        $code_output = '';
        if ($this->code_from_code_txt) {
            $code_from_code_txt = $this->code_from_code_txt;
            $code_from_code_txt_escaped = htmlentities($code_from_code_txt);
            $code_output = <<<HTML
<h2>Source Code</h2>
<pre class="src">
{$code_from_code_txt_escaped}
</pre>
HTML;
        }
        $protocol = !empty($_SERVER['HTTPS']) ? 'https' : 'http';
        $canonical = $protocol . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

        if ($options['comments'] ?? true) {
            $comments_code = $this->_getCommentsCode();
        } else {
            $comments_code = '';
        }
        return <<<HTML
{$code_output}
</article>
{$comments_code}
<footer>
	<span>&copy; 1996-{$copyrightYear}</span>
	<a href="https://github.com/artlung/lab.artlung.com" target="_blank">Source Code</a>
    <a href="https://artlung.com/s" class="joe" target="_blank">Joe Crawford</a>
</footer>
</body>
</html>
HTML;

    }

    /**
     * Loads the comments HTML code
     *
     * @return string
     */
    private function _getCommentsCode()
    {

        $protocol = !empty($_SERVER['HTTPS']) ? 'https' : 'http';
        $canonical = $protocol . '://' . $_SERVER['HTTP_HOST'] . $this->_directoryName . '/';

        return <<<HTML
<div id="commentsArea">
<div id="disqus_thread"></div>
<script>
/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var PAGE_URL = json_encode($canonical);
var PAGE_IDENTIFIER = PAGE_URL;
var disqus_config = function () {

this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://lab-artlung-com.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</div>
HTML;

    }

    /**
     * Highlight the source code
     *
     * @param string $html
     * @param $php
     *
     * @return void
     */
    public function printSource(string $html, $php = false)
    {
        if ($php) {
            $html = highlight_string($html, true);
            return;
        }
        print "<pre>";
        print htmlentities($html);
        print "</pre>";
    }

    /**
     * Highlight the source code from a file
     *
     * @param string $string
     *
     * @return void
     */
    public function printSourceFile(string $string)
    {
        $path = $this->currentPageServerDirectoryPath . 'pages/' . $this->_directoryName . '/' . $string;
        if (is_file($path)) {
            $html = file_get_contents($path);
            $this->printSource($html);
        } else {
            print "<p>File not found: $path</p>";
        }
    }


    /**
     * Print a code block
     *
     * @param string $code
     *
     * @return void
     */
    public function printCodeBlock(string $code)
    {
        print "<pre>";
        print htmlentities($code);
        print "</pre>";
    }

    /**
     * Synonym for printCodeBlock
     *
     * @param $code
     *
     * @return void
     */
    public function displayCode($code)
    {
        $this->printCodeBlock($code);
    }

    /**
     * Get the webmention form
     *
     * @return string
     */
    public function getWebmentionForm()
    {
        $canonical = 'https://lab.artlung.com' . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        return <<<HTML
<h2>Webmention</h2>
<form action="https://webmention.io/artlung.com/webmention" method="post">
    <input type="text" name="source" placeholder="source" required>
    <input type="hidden" value="{$canonical}">
    <input type="submit" value="Send Webmention">
<blockquote
HTML;
    }

}