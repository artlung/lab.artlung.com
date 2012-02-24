<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
Make an RTF Document with PHP
<?php include_once("../inc.header2of2.php"); ?>
<p align="right">
	Created: 4/2001; Updated 12/2001 &amp; 2/2004
</p>
<h1>Make an RTF Document with PHP</h1> 
<form action="rtf.rtf" method="post">
<pre>
Enter your name:     <input type="text" name="name" size="20">
Enter your lastname: <input type="text" name="lastname" size="20">
Enter your address:  <input type="text" name="address" size="20">
Enter your city:     <input type="text" name="city" size="20">
Enter your state:    <input type="text" name="state" size="20">
Enter your zip:      <input type="text" name="zip" size="20">
</pre> <input type="submit" value="Make a RTF Document with this data."> 
</form>
<p align="right">
	<b>NOTE:</b> I didn't do an magic here, I just modified the ideas at <a href="http://www.irt.org/">irt.org</a> on <a href="http://tech.irt.org/articles/js154/">producing RTF files with Cold Fusion</a>
	<br>
	<a href="http://artlung.com/feedback/">- joe</a>
</p>
<p>
	<a href="php2rtf.tar">download the kit, in a unix .tar file</a>
</p>
<p>
	<font color="red">This is unsupported software. Joy of learning and all that.</font>
</p>
<p>
	<i><b>Update 1/2002:</b> Matthew Walden had some issues getting this to work under <acronym title="Microsoft Internet Information Server">IIS</acronym> and Apache. His comments may be helpful. Thanks Matthew!</i> 
</p>
<blockquote style="background-color: #CCC;">
	I had problems getting apache and MS IIS working with RTF documents. I fixed apache by adding the following line into httpd.conf : 
	<br>
	<br>
	AddType application/x-httpd-php .rtf 
	<br>
	<br>
	IIS has a slightly more long winded solution : 
	<br>
	<br>
	In the management console, under the properties for the virtual (or default) web in the home directory, go to home directory | application settings | configuration. Click on "Add" and enter the path to the php.exe as it is set for .php files. (For me this was C:\PHP\php.exe "%s" "%s"). Type .rtf as the extension and press OK. 
	<br>
	<br>
	The web / web service may need to be restarted for the changes to be reflected. 
</blockquote>
And on changing textarea type documents so that the newlines propagate to the RTF file, I got this feedback: 
<pre>
<b>&lt;?print print str_replace('&lt;br /&gt;', '\line',nl2br(StripSlashes($_POST['address'])))?&gt; </b>
</pre>
Thanks to Mariusz for this feedback! 

<?php include_once("../inc.footer.php"); ?>


