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
                'href' => 'Upside-down'
        ]
];
// if it's october 2025, add the preload link
$now = new DateTime('now', new DateTimeZone('UTC'));
if ($now->format('Y-m') === '2025-10') {
    $link_array[] = [
            'rel' => 'preload',
            'as' => 'fetch',
            'href' => 'https://octothorp.es/?uri=' . urlencode('https://lab.artlung.com/upside-down/')
    ];
}
$lab->printHeader(
    'Upside Down Web Page Bookmarklet', [
                'link_array' => $link_array
        ]
);

?>
    <p class="date-attribution">Created October 2025</p>

    <h1 class="p-name">Upside Down Web Page Bookmarklet</h1>

    <p>Created for 2025's <a href="https://weirdweboctober.website">
            Weird Web October
        </a>, use this bookmarklet to make whatever weird or wonderful page you happen to be on turn upside down.
    </p>

    <p>
        Code Wise, there are at least two ways to make a web page be upside-down.
    There's <code>scale: -1;</code> and also <code>rotate: 90deg;</code>. Alternately
    one could write <code>transform: rotate(90deg)</code> or <code>transform: scale(-1)</code>.
    The successful transform requires <code>transform-origin</code> have its default value of <code>center center</code>, which can also be written as <code>50% 50%</code>.
    </p>

    <p><em>
            To use, drag the link below to your bookmarks bar. Click to toggle on and off.
        </em>
    </p>

    <div>
        <p>
            <?php
            $js = file_get_contents(__DIR__ . '/upside-down.js');
            $js_bookmarklet = 'javascript:' . \ArtlungLab\Bookmarklet::javascriptToBookmarklet($js);
            printf('<a href="%s">Upside-down</a>', $js_bookmarklet);
            ?>
        </p>
        <h3>Source Code</h3>
        <?php $lab->printCodeBlock($js); ?>

    </div>

    <p>Go make a web page.</p>

    <link rel="stylesheet" href="upside-down.css<?php
    echo '?'.filemtime(__DIR__ . '/upside-down.css');
    ?>">
<?php
$lab->printFooter(
    [
                'comments' => true
        ]
);
