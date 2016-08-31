<html>
<head>
<title>Generate All Websafe Colors with PHP</title>
<?php
$css = <<<END
<style type="text/css">
body { margin: 0; font-family: sans-serif; text-align: center; color: #000;}
#holder { width: 624px; text-align: left; margin: 0 auto; }
#holder div { width: 50px; height: 50px; float: left; margin: 1px; }	
.source { text-align: left; width: 624px !important; }
</style>
END

?>
<?=$css?>
</head>
<body>
<div id="holder">
<?php require('code.php'); ?>
<div class="source">
<?php highlight_file('code.php'); ?>
<?php print "<pre>".htmlentities($css)."</pre>";?>
<pre>
<?php highlight_string( '<?php $all = ' . var_export($all, true) . '; ?>') ;?>
</pre>
</div>
</div>
</body>
</html>
