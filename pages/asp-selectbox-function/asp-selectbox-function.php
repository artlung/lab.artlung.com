<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('selectBox function in Traditional ASP');

?>



    <p class="date-attribution">Created July 10, 2006, Posted August 27, 2016</p>

    <h1>
        selectBox function in Traditional ASP
    </h1>

    <pre><?php
        $contents = file_get_contents("selectbox.asp");

        print htmlentities($contents);

        ?></pre>


<?php
$lab->printFooter();
