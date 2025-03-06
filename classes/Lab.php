<?php

namespace ArtlungLab;
/**
 * Class Lab
 *
 * @category PHP
 * @package  ArtLung
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
    protected $directoryName;
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
        $this->directoryName = /* only the part before any slash */
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
     * @param string                                                                                                       $title
     * @param array{minimum-head-items: boolean, open-nav: boolean, body-tag: string, canonical: string, css-files: array} $options
     *
     * @return string
     */
    public function getHeader(string $title, array $options = [])
    {

        $open_nav = $options['open-nav'] ?? false;


        $title = trim($title);

        $cssFileName = '2025.css';
        $cssPagesPath = 'web/' . $cssFileName;
        $cssActualPath = $this->currentPageServerDirectoryPath . $cssPagesPath;
        $cacheBustCss = @filectime($cssActualPath) ? : 0;


        $jsFileName = '2025.js';
        $jsPagesPath = 'web/' . $jsFileName;
        $jsActualPath = $this->currentPageServerDirectoryPath . $jsPagesPath;
        $cacheBustJs = @filectime($jsActualPath) ? : 0;


        $scriptNameMd5 = md5($_SERVER['SCRIPT_NAME']);
        $title = htmlspecialchars($title);

        $codePath = $this->currentPageServerDirectoryPath . 'web/' . $this->directoryName . '/code.txt';

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

        $cssFiles = '';
        if ($options['css-files'] ?? false && is_array($options['css-files'])) {
            foreach ($options['css-files'] as $cssFile) {
                $cssFiles .= sprintf('<link rel="stylesheet" href="%s" type="text/css">', $cssFile);
            }
        }

        $navItems = Nav::getMetadata();
        uasort(
            $navItems, function ($a, $b) {
                return $b['year'] <=> $a['year'];
            }
        );
        $commentCountVisible = isset($_GET['comment-count']) ?? false;



        // comment-count-visible on the body if $_GET['comment-count] is set
        if ($commentCountVisible) {
            $bodyTag = str_replace('>', ' class="comment-count-visible">', $bodyTag);
            $disqusScript = '<script id="dsq-count-scr" src="https://lab-artlung-com.disqus.com/count.js" async></script>';
        } else {
            $disqusScript = '<script>console.log("comment-count not visible")</script>';
        }

        $nav = '<ol>';
        foreach ($navItems as $slug => $navItem) {
            $url = '/' . $slug . '/';
            if ($navItem['year']) {
                $styleString = "--year: {$navItem['year']};";
            } else {
                $styleString = '';
            }
            $tagString = implode(' ', $navItem['tags']);

            $webmention_count_from_yaml = $navItem['webmention_count'] ?? 0;

            $span = sprintf('<span class="disqus-comment-count" data-disqus-url="https://lab.artlung.com%s"></span>', $url);

            if ($webmention_count_from_yaml) {
                $webmention_string = $webmention_count_from_yaml;
                $webmention_string .= $webmention_count_from_yaml == 1 ? ' webmention' : ' webmentions';
                $span .= sprintf('<span class="webmention-count">%s</span>', $webmention_string);
            }
            // TODO add no inspection here
            $anchor = sprintf('<a href="%s"><span>%s</span> %s</a>', $url, $navItem['title'], $span);
            $li = sprintf('<li style="%s" data-year="%s" data-tags="%s">%s</li>', $styleString, $navItem['year'], $tagString, $anchor);
            $nav .= $li;
        }

        // comment count control
        if ($commentCountVisible) {
            $nav .= '<li>';
            $nav .= '<a href="./">Hide Comment Count</a>';
            $nav .= '</li>';
        } else {
            $nav .= '<li>';
            $nav .= '<a href="?comment-count">Show Comment Count</a>';
            $nav .= '</li>';
        }


        // 2 input types for color in a form in an li withonchange to set styles on :root for --theme-color and --theme-color-modifier
        $nav .= '<li>';
        $nav .= '<form id="theme-color-form">';
        $nav .= '<label for="theme-color">Theme Color</label>';
        $nav .= '<input type="color" id="theme-color" name="theme-color">';
        $nav .= '<label for="theme-color-modifier">Theme Color Modifier</label>';
        $nav .= '<input type="color" id="theme-color-modifier" name="theme-color-modifier">';
        // #reset-theme
        $nav .= '<button id="reset-theme">Reset Theme</button>';
        $nav .= '</form>';
        $nav .= '</ol>';

        $hamburger_emoji = '🍔';

        $shareOpenlyTitle = 'Share Openly';
        $pathOnly = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $url = 'https://lab.artlung.com' . $pathOnly;

        $canonical = 'https://lab.artlung.com' . $pathOnly;

        if (isset($options['canonical'])) {
            $canonical = $options['canonical'];
        }

        $text = '“' . $title . '” #ArtLungLab';

        // https://shareopenly.org/share/?url={URL}&text={TEXT}
        $shareOpenlyLink = 'https://shareopenly.org/share/' .
            '?url=' . urlencode($url) .
            '&text=' . urlencode($text);

        // if we explicitly set open-nav, or if we have comment-count-visible, set the checkbox to checked
        $open_nav_checked = $open_nav || $commentCountVisible ? 'checked' : '';
        $currentYear = date('Y');



        $ogImageName = 'https://lab.artlung.com/' . $this->directoryName . '/og-' . $this->directoryName . '.jpg';

        if (isset($options['og_image'])) {
            $ogImageName = $options['og_image'];
        }
        $ogImageLink = sprintf('<meta property="og:image" content="%s">', $ogImageName);

        if ($options['minimum-head-items'] ?? false) {
            return <<<HTML
<link rel="webmention" href="https://webmention.io/artlung.com/webmention">
<link rel="alternate" type="application/rss+xml" title="Feed" href="/feed.xml">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{$title} / ArtLung Lab</title>
{$ogImageLink}
{$cssFiles}
HTML;
        }



        return <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<style>:root {--currentYear: {$currentYear} }</style>
<link rel="stylesheet" href="/{$cssFileName}?b={$cacheBustCss}" type="text/css">
<link rel="webmention" href="https://webmention.io/artlung.com/webmention">
<link rel="alternate" type="application/rss+xml" title="Feed" href="/feed.xml">
<link rel="canonical" href="{$canonical}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="/{$jsFileName}?{$cacheBustJs}"></script>
{$disqusScript}
<title>{$title} / ArtLung Lab</title>
{$ogImageLink}
{$cssFiles}
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
<input type="text" placeholder="Filter" id="search-filter">
</div>
{$nav}
</nav>
<article id="content" class="h-entry">
    <a style="display:none" href="{$canonical}" class="u-url"></a>
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

        if (isset($options['slug'])) {
            $slug = $options['slug'];
        } else {
            $slug = $this->directoryName;
        }

        if ($options['comments'] ?? true) {
            $comments_code = '';
            $comments_code .= $this->getWebmentionForm();
            $comments_code .= $this->getWebmentionDisplayCode($slug);
            $comments_code .= $this->_getCommentsCode();

        } else {
            $comments_code = '';
        }
        $report_issue_url = GithubIssue::getLink(
            [
            'title' => 'Issue: ' . $slug,
            'body' => "Please describe the issue you encountered",
            'labels' => ['issue', $slug],
            'url' => $protocol . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']
            ]
        );

        return <<<HTML
{$code_output}
</article>
<aside>{$comments_code}</aside>
<footer>
	<span>&copy; 1996-{$copyrightYear}</span>
	<a href="https://github.com/artlung/lab.artlung.com" target="_blank">GitHub</a>
	<a href="{$report_issue_url}" target="_blank">Report Issue</a>
	<a href="https://lab.artlung.com/feed.xml" style="color: orange">Feed</a>
    <a href="https://artlung.com/" class="joe" target="_blank">Joe Crawford</a>
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
        $canonical = json_encode($protocol . '://' . $_SERVER['HTTP_HOST'] . '/'. $this->directoryName . '/');
        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
         */
        return <<<HTML
    <div id="container-comments">
    <div id="disqus_thread"></div>
    <script>
    var PAGE_URL = {$canonical}
    var PAGE_IDENTIFIER = PAGE_URL;
        var disqus_config = function () {
            this.page.url = PAGE_URL;
            this.page.identifier = PAGE_IDENTIFIER;
        };
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://lab-artlung-com.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
    </script>
    <noscript>To view <a href="https://disqus.com/?ref_noscript">comments powered by Disqus,</a> you must enable JavaScript.</noscript>
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
        print "<pre><code>";
        print htmlentities($html);
        print "</code></pre>";
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
        $path = $this->currentPageServerDirectoryPath . 'web/' . $this->directoryName . '/' . $string;
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
        print "<pre><code>";
        print htmlentities($code);
        print "</code></pre>";
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
    public function getWebmentionForm(): string
    {
        $canonical = 'https://lab.artlung.com' . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        return <<<HTML
<div class="webmention-area">
<h2>Comment on this with a <a href="https://indieweb.org/Webmention">webmention</a></h2>
<form action="https://webmention.io/artlung.com/webmention" method="post">
    <label>
    If you want to respond to this using <em>your own</em> website, you can do so by entering the URL below. Webmentions are not displayed at this time but may be in the future.
    </label>
    <input type="url" name="source" placeholder="source" required>
    <input type="hidden" name="target" value="{$canonical}">
    <input type="submit" value="Send Webmention">
</form>
</div>
HTML;
    }

    /**
     * Get the webmention display code
     *
     * @param string $slug
     *
     * @return string
     */
    public function getWebmentionDisplayCode(string $slug): string
    {
        $webmentions = $this->_getWebmentions($slug);
        if (empty($webmentions)) {
            return '';
        }
        $webmention_html = '';
        $webmention_html .= '<ol class="webmention-display">';
        foreach ($webmentions as $mention) {
            $webmention_html .= '<li>';
            if ($mention->getAuthorPhoto()) {
                $webmention_html .= '<span><img src="' . $mention->getAuthorPhoto() . '" alt="' . $mention->getAuthorName() . '"></span>';
            } else {
                $webmention_html .= '<span class="fake-photo"></span>';
            }
            $webmention_html .= '<span>mention from ';
            if ($mention->getAuthorName()) {
                $webmention_html .= $mention->getAuthorName();
                $webmention_html .= ' at ';
            }
            $url_minus_protocol = preg_replace('/^https?:\/\//', '', $mention->getUrl());

            if (0 !== strlen($mention->getPublished())) {
                $date_to_use = strtotime($mention->getPublished());
            } else {
                $date_to_use = strtotime($mention->getWmReceived());
            }
            $webmention_html .= '<a href="' . $mention->getUrl() . '">' . $url_minus_protocol . '</a>';
            $webmention_html .= ' on (' . date('F j, Y', $date_to_use) . ')';
            $webmention_html .= '</span>';
            $webmention_html .= '</li>';
        }
        $webmention_html .= '</ol>';
        return $webmention_html;
    }

    /**
     * Get the webmentions
     *
     * @param string $slug
     *
     * @return array Mention[]
     */
    private function _getWebmentions(string $slug): array
    {
        return (new Webmentions($slug))->getMentions();
    }


}