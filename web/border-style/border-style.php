<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader(
    '
border-style css property experiment
'
);

?>


<?php

$bs = $_GET['bs'] ?? "solid";
$px = $_GET['px'] ?? 10;
$borderTypes = array(
    "none"
, "hidden"
, "dotted"
, "dashed"
, "solid"
, "double"
, "groove"
, "ridge"
, "inset"
, "outset"
);
if (!in_array(strtolower($bs), $borderTypes)) {
    $bs = $borderTypes[4];
}
if (!is_numeric($px)) {
    $px = 10;
}
if ($bs == "none") {
    $px = 0;
}
?>
    <style>
        <!--
        div#theBox {
            border-color: #F00;
            border-width: <?php print $px; ?>px;
            border-style: <?php print $bs; ?>;
            /* http://www.w3.org/TR/REC-CSS2/box.html#border-style-properties */
            margin: 0px;
            padding: 20px;
        }

        /
        /
        -->
    </style>

    <div id="theBox">

        <p class="date-attribution"><small><em>Created February 2001. Updated 15 March 2002 and December
                    2005</em></small></p>

        <form action="./">

            <p>border-style experiment :
                <select name="bs" onchange="this.form.submit();">
                    <?php
                    foreach ($borderTypes as $style) {
                        print "<option ";
                        if ($style == $bs) {
                            print "selected";
                        }
                        print ">$style</option>";
                    }
                    ?>
                </select>
                <select name="px" onchange="this.form.submit();">
                    <?php
                    for ($i = 0; $i < 100; $i++) {
                        print "<option ";
                        if ($i == $px) {
                            print "selected";
                        }
                        print ">$i</option>";
                    }
                    ?>
                </select>
                <input type="submit" value="Try">
        </form>
        <pre>
&lt;style&gt;
&lt;!--
div#theBox {
    border-color: #F00;
    border-width: <?php echo $px; ?>px;
    border-style: <?php echo $bs; ?>;
/* <a href="http://www.w3.org/TR/REC-CSS2/box.html#border-style-properties">http://www.w3.org/TR/REC-CSS2/box.html#border-style-properties</a> */
    margin: 0px;
    padding: 20px;
}
//--&gt;
&lt;/style&gt;
</pre>

    </div>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
