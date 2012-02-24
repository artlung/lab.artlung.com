<html>
<head>
	<title>Alter things in an iframe from an enclosing page with Prototype</title>
</head>
<script type="text/javascript" src="prototype.js"></script>
<script type="text/javascript">
// This is a shortcut handler for elements inside an
// iframe with the id "iframeID":
var $IFRAME = function (id){
    return $('iframeID').contentWindow.document.getElementById(id);
}
// Prototype onload handler:
Event.observe(window, 'load', function(){
	// style the paragraph
	Element.setStyle($IFRAME('p1'), {
		border:'1px solid #c00',
		backgroundColor:'#ccc'
	});

	// add some content
	Element.insert($IFRAME('p1'), {after:'And this is text added with Prototype from the enclosing page.' });

	// (this is what loads the javascript on this page for display)
	var sourceCode = $$('script')[1];
	$('code').innerHTML = sourceCode.innerHTML;
});
</script>

<body>

<p>This page is a sample page in response to this question on stackoverflow:</p>
<h1><a href="http://stackoverflow.com/questions/2107502/what-is-the-way-to-access-iframes-element-using-prototype-method/2115248#2115248">What is the way to access IFrame's element using Prototype $ method?</a>:</h1>

<iframe src="frame.html" id="iframeID"></iframe>

<p>This is the code of the iframe:</p>

<pre>&lt;iframe src="frame.html" id="iframeID"&gt;&lt;/iframe&gt;</pre>


<p>This is the JavaScript code that is loaded on this page:</p>

<pre id="code"></pre>

<?php include_once("../inc.footer.php"); ?></body>