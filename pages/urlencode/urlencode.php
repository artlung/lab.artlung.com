<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('
How to Encode URLs; An ASCII to URLEncoded JavaScript
');

?>


<p class="date-attribution"><i>Created: December/2001</i></p>

<h1>How to Encode URLs<br>
An ASCII to URLEncoded JavaScript</h1>

<p>You know how there can't be a space in a url? Well, if you encode it, it's not a space anymore. It turns into %20 - so that the URL works across the internet, where URLs don't get to have spaces in them. There are many other exotic characters as well - and they need to be encoded. In JavaScript you use the <a href="https://home.netscape.com/eng/mozilla/3.0/handbook/javascript/ref_d-e.htm#48073">escape()</a> function which is as old as JavaScript itself. More recently this has been deprecated in favor of <a href="https://developer.netscape.com/docs/manuals/js/core/jsref15/toplev.html#1118346">encodeURI()</a>. On the server side, in Cold Fusion you use <a href="https://www.opensesame.com/documents/cf4/cfml_language_reference/3_ColdFusion_Functions/lr3_210.htm">URLEncodedFormat()</a>, in php you use <a href="https://www.php.net/manual/en/function.rawurlencode.php">rawurlencode()</a> and in ASP you use <a href="https://msdn.microsoft.com/library/en-us/iisref/html/psdk/asp/vbob0wkl.asp">Server.URLEncode()</a>.</p>

<p>For a nice bookmark of the ASCII table, bookmark <a href="https://www.asciitable.com/">https://www.asciitable.com/</a></p>

<p>As a demonstration of the JavaScript method, here's a silly script which prints the ASCII number, the character, and the encoded format side by side for ASCII codes 32 to 256.</p>

<pre>
<script type="text/javascript" language="JavaScript">
for(i=32;i<=256;i++) {
        document.write(i);
        document.write(' ');
        document.write(String.fromCharCode(i));
        document.write(' ');
        document.write(escape(String.fromCharCode(i)));
        document.write('\n');
        }
</script>
</pre>

<h2>Here's the source:</h2>

<pre>
&lt;pre&gt;
&lt;script type="text/javascript" language="JavaScript"&gt;
<b>for(i=32;i&lt;256;i++) {
        document.write(String.fromCharCode(i));
        document.write(' ');
        document.write(escape(String.fromCharCode(i)));
        document.write('\n');
        }</b>
&lt;/script&gt;
&lt;/pre&gt;
</pre>



<?php
$lab->printFooter([
	'comments' => true
]);
