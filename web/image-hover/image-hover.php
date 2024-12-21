<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader(
    '
Subtle Image Hover
'
);

?>

    <p class="date-attribution">Posted June 2004</p>

    <h1 class="p-name">Subtle Image Hover</h1>

    <h2>Demonstration</h2>
    <a href="https://artlung.com/blog/"><img src="https://artlung.com/images/brushed_girl.jpg" width="144" height="144"
                                             alt="" border="0"></a>

    <a href="https://artlung.com/blog/"><img src="https://artlung.com/images/brushed_girl.jpg" width="144" height="144"
                                             alt="" border="0"></a>

    <a href="https://artlung.com/blog/"><img src="https://artlung.com/images/brushed_girl.jpg" width="144" height="144"
                                             alt="" border="0"></a>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
