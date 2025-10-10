<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$link_array = [
        [
            'rel' => 'octo:octothorpes',
            'href' => 'weirdweboctober'
        ],
        [
            'rel' => 'octo:octothorpes',
            'href' => 'Remix'
        ]
];
// if it's october 2025, add the preload link
$now = new DateTime('now', new DateTimeZone('UTC'));
if ($now->format('Y-m') === '2025-10') {
    $link_array[] = [
            'rel' => 'preload',
            'as' => 'fetch',
            'href' => 'https://octothorp.es/?uri=' . urlencode('https://lab.artlung.com/web/squish-stretch-web/')
    ];
}
$lab->printHeader(
    'Squish & Stretch Web Pages Bookmarklet', [
    'link_array' => $link_array
    ]
);

?>
    <p class="date-attribution">Created October 2025</p>

    <h1 class="p-name">Squish & Stretch Web Pages Bookmarklet</h1>

    <p>Created for 2025's <a href="https://weirdweboctober.website">
Weird Web October
        </a>, use this bookmarklet to animate the squish and stretch
        of whatever weird or wonderful page you happen to be on.
        It works on most pages but there may be pages with CSS to resist
        transforms or which respect user preferences for reduced motion.
    </p>

    <p><em>

        To use, drag the link below to your bookmarks bar. Click to toggle on and off.
        </em>
        You may also use the <kbd>+</kbd> key to make it go faster, and the <kbd>-</kbd> key to make it go slower.
    </p>

    <div>
        <p>
            <?php
            $js = file_get_contents('squish-stretch-web.js');
            $js_bookmarklet = 'javascript:' . \ArtlungLab\Bookmarklet::javascriptToBookmarklet($js);
            printf('<a href="%s">Squish &amp; Stretch</a>', $js_bookmarklet);
            ?>
        </p>
        <h3>Source Code</h3>
        <?php $lab->printCodeBlock($js); ?>

    </div>

    <p>Go make a web page.</p>

    <link rel="stylesheet" href="squish-stretch-web.css<?php
    echo '?'.filemtime(__DIR__ . '/squish-stretch-web.css');
    ?>">
<?php
$lab->printFooter(
    [
                'comments' => true
        ]
);
