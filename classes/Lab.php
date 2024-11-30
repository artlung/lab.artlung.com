<?php
class Lab
{
public function __construct()
{
    $this->code_from_code_txt = '';
    $this->currentPageServerDirectoryPath = dirname(__FILE__) .'/../';

    // let's parse the current requested url
    $this->url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    // /asp/index.php would be asp
    // /asp/ would be asp

    $this->url = trim($this->url, '/');
    $this->directoryName = /* only the part before any slash */
        preg_replace('/\/.*/', '', $this->url);

}


public function printHeader(string $string, $options = [])
    {
        print $this->getHeader($string, $options);
    }

    public function printFooter($options = [])
    {
        print $this->getFooter($options);
    }

    public function getHeader(string $title, $options = [])
    {

        $open_nav = $options['open-nav'] ?? false;


        $title = trim($title);

        $cssFileName = '2025.css';
        $cssPagesPath = 'pages/' . $cssFileName;
        $cssActualPath = $this->currentPageServerDirectoryPath . $cssPagesPath;
        $cacheBustCss = filectime($cssActualPath);


        $jsFileName = '2025.js';
        $jsPagesPath = 'pages/' . $jsFileName;
        $jsActualPath = $this->currentPageServerDirectoryPath . $jsPagesPath;
        $cacheBustJs = filectime($jsActualPath);


        $scriptNameMd5 = md5($_SERVER['SCRIPT_NAME']);
        $title = htmlspecialchars($title);

        $codePath = $this->currentPageServerDirectoryPath  . 'pages/'. $this->directoryName . '/code.txt';

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
        // sort by the slug
        ksort($navItems);
        // turn that into an ordered list
        $nav = '<ol>';
        foreach ($navItems as $slug => $navItem) {
            $url = '/' . $slug . '/';
            $nav .= sprintf('<li><a href="%s">%s</a></li>', $url, $navItem['title']);
        }
        $nav .= '</ol>';

        $hamburger_emoji = '🍔';

        $shareOpenlyTitle = 'Share Openly';
        $pathOnly = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $url = 'https://lab.artlung.com' . $pathOnly;
        $text = $title . " #ArtLungLab";
        // https://shareopenly.org/share/?url={URL}&text={TEXT}
        $shareOpenlyLink = 'https://shareopenly.org/share/' .
            '?url=' . urlencode($url) .
            '&text=' . urlencode($text);

        $open_nav_checked = $open_nav ? 'checked' : '';


        return <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/{$cssFileName}?b={$cacheBustCss}" type="text/css">
<link rel="webmention" href="https://webmention.io/artlung.com/webmention">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="/{$jsFileName}?{$cacheBustJs}"></script>
<title>{$title}</title>
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

    private function getFooter($options)
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
            $is_main_page = $canonical === 'https://lab.artlung.com/';

if ($options['comments'] ?? true) {
    $comments_code = $this->getCommentsCode();
} else {
    $comments_code = '';
}
return <<<HTML
{$code_output}
</article>
{$comments_code}
<footer>
	<span>&copy; 1996-{$copyrightYear}</span>
    <a href="https://artlung.com/s" class="joe" target="_blank">Joe Crawford</a>
</footer>
</body>
</html>
HTML;

    }

    private function getCommentsCode()
    {

        $protocol = !empty($_SERVER['HTTPS']) ? 'https' : 'http';
        $canonical = $protocol . '://' . $_SERVER['HTTP_HOST'] . $this->directoryName . '/';

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
}