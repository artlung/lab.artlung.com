<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
Quick jQuery Overlay
<?php include_once("../inc.header2of2.php"); ?>

<p align="right">Posted January 2018</p>

<h1>Quick jQuery Overlay</h1>

<p>Sometimes I have a need to overlay an image over top of an existing website. And very often jQuery is available. And so, here's a little chunk of code that creates an overlay. Might not be useful to you but I end up using it often enough I want it posted somewhere.</p>

<p>Add these in Developer Tools or whatever way you can get to a console for the browser you're developing in.</p>

<p>So.</p>


<h2>The Code</h2>

<pre>
jQuery('&lt;div /&gt;', {
	id: 'my-overlay',
	css: {
		'width': '100%',
		'height': '100%',
		'background-image': 'url(https://via.placeholder.com/600x450/ff000/ffffff)',
		'background-repeat': 'no-repeat',
		'background-position': 'top center',
		'top': '0',
		'left': '0',
		'cursor': 'all-scroll',
		'position': 'fixed',
		'opacity': '0.5',
		'z-index': '99999'
	}
}).appendTo('body');</pre>

<h2>Code to remove the overlay</h2>
<pre>
jQuery('#my-overlay').remove()
</pre>		

<?php include_once("../inc.footer.php"); ?>
