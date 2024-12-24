<?php
require_once __DIR__ . '/../../loader.php';

$lab = new ArtlungLab\Lab();

$lab->printHeader(
    'ArtLung Lab: Web Tech Experiments by Joe Crawford', [
        'open-nav' => true,
        'canonical' => 'https://lab.artlung.com/',
        'og_image' => 'https://lab.artlung.com/home/og-home.jpg',
    ]
);
?>

    <h1>The Lab</h1>
    <p>Web experiments, explainers, code snippets by <a href="https://artlung.com/">Joe Crawford</a> since 1996.
        Some current.
        Some out of date.
        You can follow the site <a href="https://lab.artlung.com/feed.xml">feed</a> and the code in the <a href="https://github.com/artlung/lab.artlung.com">GitHub repository</a>.

    <p>
        Is there something here you'd like to see covered?

        <?php

        $github_feature_request_url = \ArtlungLab\GithubIssue::getLink(
            [
            'title' => 'Feature Request: ',
            'body' => 'I visited ArtLung Lab. My suggestion is...',
            'labels' => 'enhancement',
            'url' => 'https://lab.artlung.com/'
            ]
        );


        printf(
            '<a href="%s">File an issue</a>',
            $github_feature_request_url
        );


        ?>
    </p>
<p>

    Most pages have Disqus comments, and all pages can receive webmentions.

    </p>

<?php
$lab->printFooter(
    [
        'comments' => true,
        'slug' => 'home'
    ]
);