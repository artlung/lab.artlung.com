<?php
require_once '../../loader.php';
$rand = rand(0, 9999); // there are 10,000 sentences in the file
$sentences = file("sample_sentences.txt");
$line = $sentences[$rand];

if (isset($_GET['bloggingbot'])) {
    $defined = $_GET['bloggingbot'];
    // must be numeric and from 0 to 9999
    if (is_numeric($defined) && $defined >= 0 && $defined <= 9999) {
        $line = $sentences[$defined];
        $rand = $defined;
    }
}

$canonical_url = "https://lab.artlung.com/bloggingbot/$rand";
$og_image_url = "https://files.artlung.com/lab.artlung.com/bloggingbot/og-bloggingbot-$rand.jpg";
$og_description = "BloggingBot (2018) is a bot based on 17 years of blog posts on artlung.com."



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php print $line; ?></title>
    <?php printf("<script>var itemId = %s;console.log(%s)</script>\n", $rand, $rand); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="webmention" href="https://webmention.io/lab.artlung.com/webmention" />
    <?php
        printf('<link rel="canonical" href="%s" />', $canonical_url);
        print "\n";
        printf('<meta property="og:image" content="%s" />', $og_image_url);
        print "\n";
        printf('<meta property="og:description" content="%s" />', $og_description);
        print "\n";
    ?>
    <link rel="stylesheet" href="bloggingbot.css<?php
        echo '?' . filemtime('bloggingbot.css');
    ?>">
    <script src="bloggingbot.js<?php
        echo '?' . filemtime('bloggingbot.js');
    ?>"></script>
    <script src="/2025.js<?php
    echo '?' . filemtime('../2025.js');
    ?>"></script>
</head>
<body>
<header>
<h1><?php echo $line; ?></h1>
</header>
<section>
    <button popovertarget="about-bloggingbot">About BloggingBot</button>
    <div popover id="about-bloggingbot">
        <p>
            I created BloggingBot as a <a href="https://twitter.com/bloggingbot" target="_blank">Twitter</a> bot in 2018.
            I fed into the Python library <a href="https://github.com/jsvine/markovify" target="_blank">Markovify</a> 17 years worth
            of blog posts from <a href="https://artlung.com" target="_blank">artlung.com</a>, creating thousands of sentences.
        </p>
        <p>
            The blog post:
            <a href="https://artlung.com/blog/2018/02/23/markov-chains-are-hilarious/" target="_blank">Markov Chains are Hilarious!</a>
        </p>
        <p>
        </p>
    </div>
</section>
<nav>
    <a href="/" class="btn" title="go to lab.artlung.com"><span>lab</span><span>.artlung</span><span>.com</span></a>
    <em><a href="/bloggingbot/" id="loadRandom" class="btn" title="load another random Markov chain based on artlung.com">random++</a></em>
</nav>
</body>
</html>