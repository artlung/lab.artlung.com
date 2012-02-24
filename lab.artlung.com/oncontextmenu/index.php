<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>




Demonstration of oncontextmenu  Event Handler

<style type="text/css"><!--
input {
	font-family: courier, fixed-width;
	color: red;
	font-weight: bold;
	background-color: pink;
	font-size: 1.2em;
}
//-->
</style>


<?php include_once("../inc.header2of2.php"); ?>

<p align="right">Created on 31 Aug 2001; Reformat Oct 2002; Last Edit March 2005</p>

<h1>Demonstration of oncontextmenu Event Handler</h1>

<p>Works in: IE5+ Windows; Netscape 6.1/Win; Netscape 6.2/Linux; Safari 1.2/Mac; (Mozilla) Firefox 0.8 to 10.1/Mac+Win. <a href="/feedback/">Send me a note if you find it works in something else!</a></p>

<!--code originated by joe crawford www.artlung.com-->
<form action="../">
	<p>
		<span oncontextmenu="forms[0].elements[0].value++; return false">
			When right clicking here, the contextual menu* is disabled.
		</span>
		
		<input type="text" value="0">
	</p>
	
	<p>
		<span oncontextmenu="forms[0].elements[1].value++">
			Here, on the other hand, it's enabled.
		</span>
		<input type="text" value="0">
	
	</p>
</form>


<p><em>Contextual menu = what you get when you right click under Windows</em>: Read more about it

<a href="http://www.blooberry.com/indexdot/html/tagpages/attributes/oncontextmenu.htm">http://www.blooberry.com/indexdot/html/tagpages/attributes/oncontextmenu.htm</a> and note that this event is <b>not</b> implemented in all browsers.
</p>

<h2>Source code:</h2>
<pre>
&lt;!--code originated by joe crawford www.artlung.com--&gt;
&lt;form action="../"&gt;
   &lt;P&gt;
      &lt;span <b>oncontextmenu</b>="forms[0].elements[0].value++; <b>return false</b>"&gt;
         When right clicking here, the contextual menu* is disabled. 
      &lt;/span&gt;

      &lt;input type="text" value="0"&gt;
   &lt;/P&gt;

   &lt;P&gt;
      &lt;span <b>oncontextmenu</b>="forms[0].elements[1].value++"&gt;
         Here, on the other hand, it's enabled. 
      &lt;/span&gt;
      &lt;input type="text" value="0"&gt;
   &lt;/p&gt;
&lt;/form&gt;
</pre>

<h2>Comments from Readers</h2>

<p>Ian writes:</p>

<blockquote>
In Firefox by going to tools&gt;options&gt;web features&gt;javascript
and unselecting Allow scripts to Disable or replace context
menus, then right click is allowed, however unlike Opera, it
still dispatches right click to the script, and thus the
count increases.

<br><br>

Don't you think the document should have a list of browsers
it is known NOT to work in?

<blockquote>

<p>Well, I dunno. The intent of the page is just to show the simplest possible implementation. Keeping a table of every browser it doesn't work was not my intention. However, if someone wants to do that work I'll be happy to insert it above.
<br><br>
Regards, <a href="http://joecrawford.com/">Joe</a>
</p>


<?php include_once("../inc.footer.php"); ?>

