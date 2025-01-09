<?php
require_once '../loader.php';

// what was the requested url?

$requestedUrl = $_SERVER['REQUEST_URI'];

// parse the path

$path = parse_url($requestedUrl, PHP_URL_PATH);

$pathParts = explode('/', $path);

foreach ($pathParts as $part) {
    if (empty($part)) {
        continue;
    }
    if (is_dir($part)) {
        header("Location: /$part/");
        exit;
    }
}

$lab = new ArtlungLab\Lab();
header("HTTP/1.0 404 Not Found");
$lab->printHeader('404');
?>

    <h1>404 Not Found</h1>

<p>
    Bummer. Try <a href="/">the home page.</a>.
</p>
    <p>
<?php

$issue_url = \ArtlungLab\GithubIssue::getLink(
    [
    'title' => '404: ' . $requestedUrl,
    'body' => "I got a not found error",
    'labels' => ['bug', '404'],
    'url' => 'https://lab.artlung.com' . $requestedUrl
    ]
);


printf(
    'If it persists, please <a href="%s">file an issue on GitHub</a>.',
    $issue_url
)
?>
    </p>

<?php
$lab->printFooter(
    [
        'comments' => false
    ]
);
