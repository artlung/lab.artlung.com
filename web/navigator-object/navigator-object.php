<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('What\'s in the Navigator object?');

?>

<h1>What's in the Navigator object?</h1>

<dl id="key-pairs">
</dl>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {

    var dl = document.getElementById('key-pairs');

    for (var i in navigator) {

        // if not string continue

        var dt = document.createElement('dt');
        dt.appendChild(document.createTextNode(i));
        dl.appendChild(dt);



        var dd = document.createElement('dd');
        if (typeof navigator[i] !== 'string') {
            dd.appendChild(document.createTextNode(typeof navigator[i]));
        } else {
            dd.appendChild(document.createTextNode(navigator[i]));
        }
        dl.appendChild(dd);

    }
});
</script>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
