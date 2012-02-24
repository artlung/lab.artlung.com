<p>
Your link preference:
<?php
	// if they want new windows, give it to them!
	if($HTTP_COOKIE_VARS ['new_window']=="1") {
?><a href="/windowcookie.php?new_window=0"
	onmouseover="if(document.getElementById)this.innerHTML='change this setting';"
	onmouseout="if(document.getElementById)this.innerHTML='links open in new windows';"
	target="_self">links open in new windows</a><?php
	} else {
	// otherwise, default to the same window
?><a href="/windowcookie.php?new_window=1"
	onmouseover="if(document.getElementById)this.innerHTML='change this setting';"
	onmouseout="if(document.getElementById)this.innerHTML='links open in this window';"
	target="_self">links open in this window</a><?php
	}
?>
</p>