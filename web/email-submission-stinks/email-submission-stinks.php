<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader(
    '





Form action mailto: stinks


'
);

?>
    <p class="date-attribution">Started August 2001; Last Update January 2003</p>

    <h1>Form action mailto: stinks</h1>

    <p>
        Budding web developers love to get feedback on their sites.
        Budding web developers also love to use forms.
        The problem comes because most free or cheap hosts don't have much in the way of CGI or server-side programming.
        So how to use a proper feedback form? In many web-dev books they advise these folks to use the action type of
        "mailto" in a form action. This is a bad idea. Why? Browsers choke on it in a way other form actions don't
        choke. If no email client is set up, it can choke. They all seem to throw up a more-threatening-than-usual error
        message as well. Below are some examples of the draconian error messages:
    </p>

    <div class="gallery">
        <?php
        $images = [
            'email-submission-mac-icab-252.gif',
            'email-submission-mac-ie-5.gif',
            'email-submission-mac-ns-4.gif',
            'email-submission-osx-icab.gif',
            'email-submission-osx-mozilla-1.1.gif',
            'email-submission-osx-msie5.1.gif',
            'email-submission-osx-opera-5.gif',
            'email-submission-osx-safari-1-beta.gif',
            'email-submission-webtv-viewer20-webtv-client-rom-2.2.gif',
            'email-submission-win-ie-5.gif',
            'email-submission-win-ns-3.gif',
            'email-submission-win-ns-4.gif',
            'email-submission-win-ns-6.gif',
            'email-submission-win-opera-5.gif',
        ];

        foreach ($images as $image) {
            // get height and width of image
            $size = getimagesize($image);
            $width = $size[0];
            $max_width = $width;

            $basename = basename($image);

            $h2_text = str_replace('.gif', '', $basename);
            $h2_text = str_replace('email-submission-', '', $h2_text);
            $word_mappings = [
                'webtv-viewer20-webtv-client-rom-2.2' => 'WebTV Viewer 2.0 (Client ROM 2.2)',
                'msie' => 'Microsoft Internet Explorer',
                'win' => 'Windows',
                'mac' => 'MacOS Classic',
                '-ie-' => 'Microsoft Internet Explorer',
                'ns' => 'Netscape',
                'webtv' => 'WebTV',
                'opera' => 'Opera',
                'osx' => 'MacOS X',
                'icab' => 'iCab',
                '252' => '2.5.2',
                'mozilla' => 'Mozilla',
                'safari' => 'Safari',
                'beta' => 'Beta',
            ];

            // sort the $word_mappings array by key length, descending
            uksort(
                $word_mappings, function ($a, $b) {
                    return strlen($b) - strlen($a);
                }
            );

            foreach ($word_mappings as $key => $value) {
                $h2_text = str_replace($key, $value . ' ', $h2_text);
            }
            $h2_text = str_replace('-', ' ', $h2_text);
            print "<div class='card'>";
            printf('<h2>%s</h2>', $h2_text);
            printf('<img src="%s" alt="%s" loading="lazy" style="width:100%%;height:auto;max-width:%spx">', $image, $h2_text, $max_width);
            print "</div>";

        }

        ?></div>


    <h2>Example Email Form</h2>

<?php ob_start(); ?>
    <form method="post" action="mailto:recipient@fake.dom" enctype="text/plain">
        <textarea name="your_comments" placeholder="Your Comments Here"></textarea>
        <input type="submit" value="Submit Your Comments">
    </form>
<?php
$code = ob_get_clean();
echo $code;
?>

    <h2>Source</h2>
<?php
$lab->displayCode($code);
?>

    <link rel="stylesheet" href="email-submission-stinks.css<?php
    echo '?' . filectime('email-submission-stinks.css');
    ?>" type="text/css"/>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
