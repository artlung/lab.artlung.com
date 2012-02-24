<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
WS_FTP JavaScript Password Decoder
<?php include_once("../inc.header2of2.php"); ?>


<p align="right">Created May 2001</p>
<h1>WS_FTP JavaScript Password Decoder</h1> 

<pre>
Go into the .ini file, and look for the lines which begin with PWD.
Enter the value of the PWD line:

It should look like hex encoded gobbledegook with "PWD=" attached to it:
PWD=V1DF32C1C88985F24FE8A3D03783C07E2A1667BA9AD77A96E
</pre>

<form action="./" onsubmit="return false;">


<table border="0" cellspacing="0" cellpadding="4">
	<tr>
		<td align="right">Encoded PWD Line</td>
		<td><input name="obscured_entry" size="60"><input name="button1" onclick="wsFTP_decoder(obscured_entry.value)" type="button" value="Decode"></td>
	</tr>
	<tr>
		<td align="right">Decoded Password </td>
		<td><input name="decoded_entry" size="60"><input type="reset" value="Reset Fields"></td>
	</tr>
</table>



</form>

<?php include_once("../inc.footer.php"); ?>
