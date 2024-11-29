
<?php include_once("../inc.header1of2.php"); ?>
Generate All Websafe Colors with PHP
<?php include_once("../inc.header2of2.php"); ?>
<?php
$css = <<<END
<style>
body { margin: 0; font-family: sans-serif; text-align: center; color: #000;}
#holder { width: 624px; text-align: left; margin: 0 auto; }
#holder div { width: 50px; height: 50px; margin: 1px; display: inline-block; }	
.source { text-align: left; width: 624px !important; }
</style>
END

?>
<?=$css?>
</head>
<body>
<div id="holder">
<?php require('code.php'); ?>
</div>
<h2>Code</h2>
<div class="source">
    <?php highlight_file('code.php'); ?>
    <?php print "<pre>".htmlentities($css)."</pre>";?>
</div>

<?php include_once("../inc.footer.php"); ?>

