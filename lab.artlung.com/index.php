<?php include_once("inc.functions.php") ?>
<?php include_once("inc.header1of2.php") ?>
lab.artlung.com - web technology tips by Joe Crawford or ArtLung.com
<?php include_once("inc.header2of2.php") ?>

<h1>Joe Crawford's space of web geekery</h1>

<?php
$directories = array();
if ($handle = opendir('.')) {
   while (false !== ($file = readdir($handle))) {
       if ($file != "." && $file != "..") {
           if(is_dir($file))
           $directories[] = $file;
       }
   }
   closedir($handle);
}
sort($directories);

print "<ul>";
foreach($directories as $d)
{
	$txt = $d;
	if(key_exists($d,$bc_label))
		$txt = $bc_label[$d];
	print "<li><a href='$d/'>$txt</a></li>\n";

}
print "<ul>"


?> 


<?php include_once("inc.footer.php") ?>

