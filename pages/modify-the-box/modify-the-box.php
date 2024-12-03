<?php
require_once '../../loader.php';
$lab = new Lab();
$lab->printHeader(
    '
Modify the Box - a DHTML Experiment
'
);

?>

    <p class="date-attribution">Created January 18, 2001</p>

    <h1>Modify The Box (dhtml experiment, 2001)</h1>

<?php

require 'modify-the-box.html';

printf('<script>%s</script>', file_get_contents('modify-the-box.js'));

printf('<style>%s</style>', file_get_contents('modify-the-box.css'));

foreach ([
             'HTML' => 'modify-the-box.html',
             'JavaScript' => 'modify-the-box.js',
             'SCSS' => 'modify-the-box.scss'] as $h2 => $code) {

    printf('<h2>%s</h2>', $h2);
    printf('<pre><code>%s</code></pre>', htmlentities(file_get_contents($code)));

}

?>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
