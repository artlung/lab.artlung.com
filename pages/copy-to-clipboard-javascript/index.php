<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('
Copy to Clipboard JavaScript
');

?>

<p class="date-attribution">Created 12/02/2005</p>

<h1>
Copy to Clipboard JavaScript
</h1>

<pre>
// Microsoft Internet Explorer only
// Manipulating the system clipboard in JavaScript
//   Read more at:
//   <a href="http://msdn.microsoft.com/workshop/author/dhtml/reference/objects/clipboarddata.asp">http://msdn.microsoft.com/workshop/author/dhtml/reference/objects/clipboarddata.asp</a>

// set the clipboard
// var x = 'Whatever you want on the clipboard';
// <b>window.clipboardData.setData('Text',x);</b>

// get the clipboard data
<b>window.clipboardData.getData('Text');</b>

// clear the clipboard
// <b>window.clipboardData.clearData();</b>
</pre>

<?php
$lab->printFooter([
	'comments' => true
]);
