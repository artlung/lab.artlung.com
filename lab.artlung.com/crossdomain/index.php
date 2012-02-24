<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
crossdomain.xml
<?php include_once("../inc.header2of2.php"); ?>

<p align="right">Created: 2009-07-29</p>

<h1>crossdomain.xml</h1>

<p>
	Place a file named crossdomain.xml at the root of your site to allow other flash movies to access resources on a domain. See also: <a href="http://www.adobe.com/devnet/articles/crossdomain_policy_file_spec.html">http://www.adobe.com/devnet/articles/crossdomain_policy_file_spec.html</a>

</p>

<?php
$code = '<cross-domain-policy>
  <site-control permitted-cross-domain-policies="all"/>
  <allow-access-from domain="*"/>
</cross-domain-policy>';
?>
<pre>
<?php echo nl2br(htmlentities($code)); ?>
</pre>


<?php include_once("../inc.footer.php"); ?>