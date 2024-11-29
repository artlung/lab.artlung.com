<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
Dropdown Navigation Where Only Some Links Open New Windows
<?php include_once("../inc.header2of2.php"); ?>

<p align="right">Created October 28, 2002</p>

<h1>Dropdown Navigation Where Only Some Links Open New Windows</h1>

<blockquote>
<b>Question:</b>
I need to make a dropdown that spawns 
a new window for some options but not 
for others - in the same drop down.
<br><br>
Basically I need the ability to make
some &lt;option value""&gt; open a new window
others not.
<br><br>
Been trying to figure it out forever.
<br><br>
So if you choose to solve this puzzle 
let me know.
</blockquote>

<p><b>Answer:</b><br>
Sure, here it is! </p>

<blockquote>
See <a href="/lab/scripting/dropdown/">more dropdown navigation solutions</a>.
</blockquote>


<form action="../">
<select onchange="parseNavigation(this)">
	<!-- in each option, the value should               -->
	<!-- include a pipe "|" character before each url,  -->
	<!-- to open in a new window, specify a window name -->
	<!-- urls may be local                              -->
	<option>Choose a destination to open in a attribute-controlled popup window!</option>
	<option value="|http://www.yahoo.com/">YAHOO</option>
	<option value="GoogleWin|http://www.google.com/">GOOGLE</option>
	<option value="WSDWin|http://websandiego.org/">WEBSANDIEGO</option>
	<option value="|http://www.altavista.com/">ALTAVISTA</option>
	<option value="|http://www.amazon.com/">AMAZON</option>
	<option value="ArtLungWin|https://artlung.com/">ARTLUNG</option>
</select>
</form>

<h2>HTML Source</h2>

<pre>
&lt;form action="../"&gt;
&lt;select onchange="parseNavigation(this)"&gt;<b>
    &lt;!-- in each option, the value should               --&gt;
    &lt;!-- include a pipe "|" character before each url,  --&gt;
    &lt;!-- to open in a new window, specify a window name --&gt;
    &lt;!-- urls may be local                              --&gt;</b>
    &lt;option&gt;Choose a destination to open in a attribute-controlled popup window!&lt;/option&gt;
    &lt;option value="<b>|</b>http://www.yahoo.com/"&gt;YAHOO&lt;/option&gt;
    &lt;option <b>value="GoogleWin|http://www.google.com/"</b>&gt;GOOGLE&lt;/option&gt;
    &lt;option <b>value="WSDWin|http://websandiego.org/"</b>&gt;WEBSANDIEGO&lt;/option&gt;
    &lt;option value="<b>|</b>http://www.altavista.com/"&gt;ALTAVISTA&lt;/option&gt;
    &lt;option value="<b>|</b>http://www.amazon.com/"&gt;AMAZON&lt;/option&gt;
    &lt;option <b>value="ArtLungWin|https://artlung.com/"</b>&gt;ARTLUNG&lt;/option&gt;
&lt;/select&gt;
&lt;/form&gt;
</pre>







<?php include_once("../inc.footer.php"); ?>


