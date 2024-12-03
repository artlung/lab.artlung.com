<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('
background-image in form elements?
');

?>

<h1>background images in form elements</h1> 

<p>
	How well does it work? Rather inconsistently across browsers,
	unfortunately. If you would like to send a screenshot of these
	examples, please feel free!
</p>

<h2>Examples</h2>

<h3>select box</h3>

<form action="./" method="get">
<select>
	<option class="bgclass1"> Amiga </option>
	<option id="idtest1"> Windows </option>
	<option style="background-image: url(./linux_os_small.gif);"> Linux </option>
	<option style="background: url(./linux_os_small.gif);"> Linux II</option>
	<option background="./freebsd_os_small.gif"> FreeBSD </option>
</select>

<h2>HTML Source</h2>
<pre>
&lt;select&gt;
	&lt;option class="bgclass1"&gt; Amiga &lt;/option&gt;
	&lt;option id="idtest1"&gt; Windows &lt;/option&gt;
	&lt;option style="background-image: url(./linux_os_small.gif);"&gt; Linux &lt;/option&gt;
	&lt;option style="background: url(./linux_os_small.gif);"&gt; Linux II&lt;/option&gt;
	&lt;option background="./freebsd_os_small.gif"&gt; FreeBSD &lt;/option&gt;
&lt;/select&gt;
</pre>

	<hr>

<h3>textarea</h3>

	<textarea class="bgclass8" rows="4" cols="40"></textarea>
<pre>
	&lt;textarea class="bgclass8" rows="4" cols="40"&gt;&lt;/textarea&gt;
</pre>


<h3>radio button</h3>

	<input type="radio" name="radButton" class="bgclass3">
<pre>
	&lt;input type="radio" name="radButton" class="bgclass3"&gt;
</pre>

<h3>submit button</h3>

	<input type="submit" class="bgclass2">
<pre>
	&lt;input type="submit" class="bgclass2"&gt;
</pre>

<h3>input type="text"</h3>

	<input type="text" class="bgclass6">
<pre>
	&lt;input type="text" class="bgclass6"&gt;
</pre>


<h3>changing an &lt;img&gt; tag on mouseover works consistently, but it's not a background on a form</h3>

<img src="amiga_os_small.gif" name="widget" alt="">

<select onchange="if(document.images) document.images['widget'].src='./'+this.options[this.selectedIndex].value+'_os_small.gif';">
	<option value="amiga">amiga</option>
	<option value="be">be</option>
	<option value="dos">dos</option>
	<option value="freebsd">freebsd</option>
	<option value="linux">linux</option>
	<option value="mac">mac</option>
	<option value="next">next</option>
	<option value="sun">sun</option>
	<option value="windows">windows</option>
</select>

<pre>
&lt;img src="amiga_os_small.gif" name="widget" alt=""&gt;

&lt;select onchange="if(document.images) document.images['widget'].src='./'+this.options[this.selectedIndex].value+'_os_small.gif';"&gt;
	&lt;option value="amiga"&gt;amiga&lt;/option&gt;
	&lt;option value="be"&gt;be&lt;/option&gt;
	&lt;option value="dos"&gt;dos&lt;/option&gt;
	&lt;option value="freebsd"&gt;freebsd&lt;/option&gt;
	&lt;option value="linux"&gt;linux&lt;/option&gt;
	&lt;option value="mac"&gt;mac&lt;/option&gt;
	&lt;option value="next"&gt;next&lt;/option&gt;
	&lt;option value="sun"&gt;sun&lt;/option&gt;
	&lt;option value="windows"&gt;windows&lt;/option&gt;
&lt;/select&gt;
</pre>

</form>




<?php
$lab->printFooter([
	'comments' => true
]);