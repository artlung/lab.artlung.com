<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('
Dropdown / Select Box Navigation with JavaScript
');

?>

<h1>Dropdown / Select Box Navigation with JavaScript</h1>

<h2>Simple Navigation</h2>

<p>The following is the standard navigation with a &lt;SELECT&gt; onChange action</p>

<form action="../">
<select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
	<option value="">Choose a destination...</option>
	<option value="https://www.yahoo.com/">YAHOO</option>
	<option value="http://www.google.com/">GOOGLE</option>
	<option value="http://www.altavista.com/">ALTAVISTA</option>
	<option value="http://www.amazon.com/">AMAZON</option>
	<option value="https://artlung.com/">ARTLUNG</option>
</select>
</form>

<pre>
&lt;form action="../"&gt;
&lt;select <b>onchange="window.open(this.options[this.selectedIndex].value,'_top')"</b>&gt;
    &lt;option value=""&gt;Choose a destination...&lt;/option&gt;
    &lt;option value="http://www.yahoo.com/"&gt;YAHOO&lt;/option&gt;
    &lt;option value="http://www.google.com/"&gt;GOOGLE&lt;/option&gt;
    &lt;option value="http://www.altavista.com/"&gt;ALTAVISTA&lt;/option&gt;
    &lt;option value="http://www.amazon.com/"&gt;AMAZON&lt;/option&gt;
    &lt;option value="https://artlung.com/"&gt;ARTLUNG&lt;/option&gt;
&lt;/select&gt;
&lt;/form&gt;
</pre>

<hr>



<h2>With Radio Buttons</h2>

<p>This is the same concept, but with Radio buttons and an activation button</p>

<form action="../">
	<p><b>Choose a destination:</b><br>
	<input type="RADIO" value="http://www.yahoo.com/"     name="userChoice" id="navRadio01">
		<label for="navRadio01">YAHOO</label><br>
	<input type="RADIO" value="http://www.google.com/"    name="userChoice" id="navRadio02">
		<label for="navRadio02">GOOGLE</label><br>
	<input type="RADIO" value="http://www.altavista.com/" name="userChoice" id="navRadio03">
		<label for="navRadio03">ALTAVISTA</label><br>
	<input type="RADIO" value="http://www.amazon.com/"    name="userChoice" id="navRadio04">
		<label for="navRadio04">AMAZON</label><br>
	<input type="RADIO" value="https://artlung.com/"       name="userChoice" id="navRadio05">
		<label for="navRadio05">ARTLUNG</label><br>
<input type="BUTTON"
	value="Go there!"
	onclick="ob=this.form.userChoice;for(i=0;i<ob.length;i++){if(ob[i].checked){window.open(ob[i].value,'_top');};}"></p>
</form>
<pre>
&lt;form action="../"&gt;
    &lt;p&gt;&lt;b&gt;Choose a destination:&lt;/b&gt;&lt;br&gt;
    &lt;input type="RADIO" value="http://www.yahoo.com/"     <b>name="userChoice"</b> id="navRadio01"&gt;
        &lt;label for="navRadio01"&gt;YAHOO&lt;/label&gt;&lt;br&gt;
    &lt;input type="RADIO" value="http://www.google.com/"    <b>name="userChoice"</b> id="navRadio02"&gt;
        &lt;label for="navRadio02"&gt;GOOGLE&lt;/label&gt;&lt;br&gt;
    &lt;input type="RADIO" value="http://www.altavista.com/" <b>name="userChoice"</b> id="navRadio03"&gt;
        &lt;label for="navRadio03"&gt;ALTAVISTA&lt;/label&gt;&lt;br&gt;
    &lt;input type="RADIO" value="http://www.amazon.com/"    <b>name="userChoice"</b> id="navRadio04"&gt;
        &lt;label for="navRadio04"&gt;AMAZON&lt;/label&gt;&lt;br&gt;
    &lt;input type="RADIO" value="https://artlung.com/"       <b>name="userChoice"</b> id="navRadio05"&gt;
        &lt;label for="navRadio05"&gt;ARTLUNG&lt;/label&gt;&lt;br&gt;
&lt;--the onclick value below must all be on one line--&gt;
&lt;input type="BUTTON"
    value="Go there!"
    <b>onclick="ob=this.form.userChoice;for(i=0;i&lt;ob.length;i++){
    if(ob[i].checked){window.open(ob[i].value,'_top');};}"</b>&gt;&lt;/p&gt;
&lt;/form&gt;
</pre>

<hr>



<h2>Navigation, Opens In New Window</h2>

<p><b>A variation was asked about:</b></p>

<blockquote> I'm trying to make a javascript that will open a site in a new (_blank) 
window from a pulldown menu with a submit button.  Using existing scripts 
that load pages in a specific frame I tried specifying the frame "_blank" 
or just "blank" in the place where you put the targeted frame name, but 
it only returns an error.  Does anyone have any idea how to do what I'm 
trying?</blockquote>


<form action="../">
<select name="myDestination">
	<option value="http://www.yahoo.com/">YAHOO</option>
	<option value="http://www.google.com/">GOOGLE</option>
	<option value="http://www.altavista.com/">ALTAVISTA</option>
	<option value="http://www.amazon.com/">AMAZON</option>
	<option value="https://artlung.com/">ARTLUNG</option>
</select>
<input type="button"
	value="Open in New Window!"
	onclick="ob=this.form.myDestination;window.open(ob.options[ob.selectedIndex].value)">
</form>

<pre>
&lt;form action="../"&gt;
&lt;select <b>name="myDestination"</b>&gt;
    &lt;option value="http://www.yahoo.com/"&gt;YAHOO&lt;/option&gt;
    &lt;option value="http://www.google.com/"&gt;GOOGLE&lt;/option&gt;
    &lt;option value="http://www.altavista.com/"&gt;ALTAVISTA&lt;/option&gt;
    &lt;option value="http://www.amazon.com/"&gt;AMAZON&lt;/option&gt;
    &lt;option value="https://artlung.com/"&gt;ARTLUNG&lt;/option&gt;
&lt;/select&gt;
&lt;input type="button"
    value="Open in New Window!"
    <b>onclick="ob=this.form.myDestination;window.open(ob.options[ob.selectedIndex].value)"</b>&gt;
&lt;/form&gt;
</pre>




<hr>

<h2>Dropdown to Email Address</h2>

<p><b>SOMEONE ADDED THIS TWIST TO THE ISSUE:</b></p>

<blockquote>
Could this work for a drop down email list &amp; how would that look?<br>
Thanks ...</blockquote>


<blockquote>
<b>Hayden Porter</b> changed the method I used for the email version from window.open to location.href to improve the action of the script
</blockquote>


<!-- initial version for email dropdown (c) 1999 Joe Crawford (joe(at)artlung.com)  -->
<!-- coding tested and improved by Hayden Porter (hporter(at)uakron.edu)            -->
<p><b>Choose a recipient address:</b></p>
<form action="../">
<select name="sendEmailTo">
	<option value="mailto:test@example.com">test@example.com</option>
	<option value="mailto:webmaster@example.com">webmaster@example.com</option>
	<option value="mailto:abuse@example.com">abuse@example.com</option>
</select>
<input
	type="button"
	value="I've selected the recipient, Let's send mail!"
	onclick="location.href=this.form.sendEmailTo.options[sendEmailTo.selectedIndex].value">
</form>
<!-- initial version for email dropdown (c) 1999 Joe Crawford (joe(at)artlung.com)  -->
<!-- coding tested and improved by Hayden Porter (hporter(at)uakron.edu)            -->

<pre>
&lt;!-- initial version for email dropdown (c) 1999 Joe Crawford (joe(at)artlung.com)  --&gt;
&lt;!-- coding tested and improved by Hayden Porter (hporter(at)uakron.edu)            --&gt;
&lt;p&gt;&lt;b&gt;Choose a recipient address:&lt;/b&gt;&lt;/p&gt;
&lt;form action="../"&gt;
&lt;select <b>name="sendEmailTo"</b>&gt;
    &lt;option value="mailto:joe@artlung.com"&gt;joe@artlung.com&lt;/option&gt;
    &lt;option value="mailto:ArtLung@AOL.COM"&gt;ArtLung@AOL.COM&lt;/option&gt;
    &lt;option value="mailto:webmaster@URMCargo.com"&gt;webmaster@URMCargo.com&lt;/option&gt;
&lt;/select&gt;
&lt;input
    type="button"
    value="I've selected the recipient, Let's send mail!"
    <b>onclick="location.href=this.form.sendEmailTo.options[sendEmailTo.selectedIndex].value"</b>&gt;
&lt;/form&gt;
&lt;!-- initial version for email dropdown (c) 1999 Joe Crawford (joe(at)artlung.com)  --&gt;
&lt;!-- coding tested and improved by Hayden Porter (hporter(at)uakron.edu)            --&gt;
</pre>

<hr>

<h2>Dropdown Navigation with Frames</h2>

<blockquote>
 I've tried to do this on my own, and even had golive generate a 
'work-around' for me, but if i can reduce the amount of code THAT 
took and still achieve my goal, I'll be a happy camper.
<br><br>
I have a two-frame set up that uses the right frame for navigation 
(rebellious-huh?) via 4 drop-down form menus with an onChange 
handler. This replaces content in the left frame ok, but the last 
selected item remains in the menu list. I would like the new left 
frame to have  some sort of onLoad to refresh the right frame, to 
reset, as it were, the menu lists. My work around in golive involves 
reloading the right page from an 'onLoad' in the left page, which 
does what I want, but unless I'm mistaken (have been before), it adds 
something like 70 lines of code to my page.
I thought there must be a more compact way to do this?
</blockquote>

<p><b>For the solution visit: <a href="/lab/scripting/dropdown_frames/">Dropdown Navigation with Frames</a></b></p>



<hr>

<h2>Navigation to New, Sized Window</h2>

<p><strong>There is no end to the variations in dropdown navigation. I think - no - we've exhausted all the possibilities - whoops - here's another!</strong> - <em>We're trying to implement a pop-up window from a pull-down menu.  We've
tried including the onClick in the option, calling a script from the
head, and reading Danny Goodman.  We got nuthin'.  Any help is greatly appreciated.</em></p>

<form action="../">
<select name="myDestination"
	onchange="this.form.WINDOW_NAMER.value++;ob=this.form.myDestination;window.open(ob.options[ob.selectedIndex].value,'WinName'+this.form.WINDOW_NAMER.value,'toolbar=1,location=1,directories=1,status=1,menubar=1,scrollbars=1,resizable=1,width=400,height=300')">
	<option>Choose a destination to open in a attribute-controlled popup window!</option>
	<option value="http://www.yahoo.com/">YAHOO</option>
	<option value="http://www.google.com/">GOOGLE</option>
	<option value="http://www.altavista.com/">ALTAVISTA</option>
	<option value="http://www.amazon.com/">AMAZON</option>
	<option value="https://artlung.com/">ARTLUNG</option>
</select>
<!-- HIDDEN VARIABLE SO WE PROVIDE UNIQUE NAMES FOR THESE NEW WINDOWS -->
<!-- THUS AVOIDING THE "WHERE'S THAT WINDOW" PHENOMENON -->
<input name="WINDOW_NAMER" type="HIDDEN" value="1">
</form>

<pre>
&lt;form action="../"&gt;
&lt;--the onchange value below must all be on one line--&gt;
&lt;select <b>name="myDestination"</b>
    <b>onchange="this.form.WINDOW_NAMER.value++;
    ob=this.form.myDestination;
    window.open(ob.options[ob.selectedIndex].value
    ,'Window_Name'+this.form.WINDOW_NAMER.value,
    'toolbar=1,location=1,directories=1,status=1,menubar=1,scrollbars=1,resizable=1,width=400,height=300')"</b>&gt;
    &lt;option&gt;Choose a destination to open in a attribute-controlled popup window!&lt;/option&gt;
    &lt;option value="http://www.yahoo.com/"&gt;YAHOO&lt;/option&gt;
    &lt;option value="http://www.google.com/"&gt;GOOGLE&lt;/option&gt;
    &lt;option value="http://www.altavista.com/"&gt;ALTAVISTA&lt;/option&gt;
    &lt;option value="http://www.amazon.com/"&gt;AMAZON&lt;/option&gt;
    &lt;option value="https://artlung.com/"&gt;ARTLUNG&lt;/option&gt;
&lt;/select&gt;
&lt;!-- HIDDEN VARIABLE SO WE PROVIDE UNIQUE NAMES FOR THESE NEW WINDOWS --&gt;
&lt;!-- THUS AVOIDING THE "WHERE'S THAT WINDOW" PHENOMENON --&gt;
&lt;input <b>name="WINDOW_NAMER"</b> type="HIDDEN" value="1"&gt;
&lt;/form&gt;
</pre>


<hr>

<h2>Dropdown Navigation to iFrame</h2>

<p><b>IN ANOTHER TWIST</b>:</p>

<blockquote>
ANOTHER WONDERFUL QUESTION ABOUT DROP DOWN BOXES:<br>
<br>
I AM TRYING TO CREATE A DROP DOWN BOX THAT ON CHANGE WILL CAUSE AN IFRAME TO 
POP UP IN THE PAGE.  THE IFRAME SOURCE WILL BE DIFFERENT FOR EVERY OPTION IN 
THE DROP DOWN BOX.
<br><br>
ANY INSIGHT YOU COULD GIVE WOULD BE APPRECIATED, I HAVE BEEN WORKING ON THIS 
FOR SOME TIME AND HAVE NOT FOUND THE APPROPRIATE SOLUTION.
<br><br>
THANKS FOR YOUR TIME,
</blockquote>

<p>To which I reply - sure thing - no problem! :-)  Keep in mind IFRAMES have zero support in Netscape 4 or earlier. Mozilla, Netscape 6+ and IE support them though.
See <a href="http://www.w3.org/TR/REC-html40/present/frames.html#h-16.5">http://www.w3.org/TR/REC-html40/present/frames.html#h-16.5</a> for more on IFRAME.</p>


<form action="../">
<select name="dest" onchange="window.open(this.options[this.selectedIndex].value,'myIFrame')">
	<option>Choose a destination for your IFrame!</option>
	<option value="http://www.yahoo.com/">YAHOO</option>
	<option value="http://www.google.com/">GOOGLE</option>
	<option value="http://www.altavista.com/">ALTAVISTA</option>
	<option value="http://www.amazon.com/">AMAZON</option>
	<option value="https://artlung.com/">ARTLUNG</option>
</select>
</form>

<iframe src="https://joecrawford.com/" name="myIFrame" width="400" height="200">You can't see this because your browser does not support iframes.</iframe>

<pre>
&lt;select name="dest" <b>onchange="window.open(this.options[this.selectedIndex].value,'myIFrame')"</b>&gt;
    &lt;option&gt;Choose a destination for your IFrame!&lt;/option&gt;
    &lt;option value="http://www.yahoo.com/"&gt;YAHOO&lt;/option&gt;
    &lt;option value="http://www.google.com/"&gt;GOOGLE&lt;/option&gt;
    &lt;option value="http://www.altavista.com/"&gt;ALTAVISTA&lt;/option&gt;
    &lt;option value="http://www.amazon.com/"&gt;AMAZON&lt;/option&gt;
    &lt;option value="https://artlung.com/"&gt;ARTLUNG&lt;/option&gt;
&lt;/select&gt;
&lt;/form&gt;

&lt;iframe src="https://joecrawford.com/" <b>name="myIFrame"</b> width="400" height="200"&gt;
    You can't see this because your browser does not support iframes.
&lt;/iframe&gt;
</pre>

<hr>


<h2>Dropdown Navigation Where Only Some Links Open New Windows</h2>

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
Sure, here it is! <a href="/lab/scripting/dropdown-only-some-new-window/">Dropdown Navigation Where Only Some Links Open New Windows</a></p>


<a name="dropdown-with-go"></a>
<h2>Dropdown Navigation with a Go Button</h2>

<blockquote>
	<b>Question:</b>
	What's the code if I just want a select list, and then a submit button (which opens the selected link in the current window)?
</blockquote>

<form action="../">
<select name="mySelectbox">
    <option value="">Choose a destination...</option>
    <option value="http://www.yahoo.com/">YAHOO</option>
    <option value="http://www.google.com/">GOOGLE</option>
    <option value="http://www.altavista.com/">ALTAVISTA</option>
    <option value="http://www.amazon.com/">AMAZON</option>
    <option value="https://artlung.com/">ARTLUNG</option>
</select>
<input type="button" onclick="window.open(this.form.mySelectbox.options[this.form.mySelectbox.selectedIndex].value,'_top')" value="Go">
</form>

<pre>
&lt;form action=&quot;../&quot;&gt;
&lt;select name=&quot;mySelectbox&quot;&gt;
    &lt;option value=&quot;&quot;&gt;Choose a destination...&lt;/option&gt;
    &lt;option value=&quot;http://www.yahoo.com/&quot;&gt;YAHOO&lt;/option&gt;
    &lt;option value=&quot;http://www.google.com/&quot;&gt;GOOGLE&lt;/option&gt;
    &lt;option value=&quot;http://www.altavista.com/&quot;&gt;ALTAVISTA&lt;/option&gt;
    &lt;option value=&quot;http://www.amazon.com/&quot;&gt;AMAZON&lt;/option&gt;
    &lt;option value=&quot;https://artlung.com/&quot;&gt;ARTLUNG&lt;/option&gt;
&lt;/select&gt;
&lt;input type=&quot;button&quot; onclick=&quot;window.open(this.form.mySelectbox.options[this.form.mySelectbox.selectedIndex].value,&#x27;_top&#x27;)&quot; value=&quot;Go&quot;&gt;
&lt;/form&gt;
</pre>



<a name="dropdown-with-go-image"></a>
<h2>Dropdown Navigation with a Go Button Image</h2>

<blockquote>
	<b>Question: </b>I used the portion of code you posted last. But instead of input type="button", I have type="image" src="images/gobutton.png". And when I make my selection and hit the button, it sends me to my root directory instead of the specified destination. However, when I use type="button", it works fine. Any advice?
</blockquote>

<form action="/" name="goForm">
<select name="mySelectbox">
    <option value="">Choose a destination...</option>
    <option value="http://www.yahoo.com/">YAHOO</option>
    <option value="http://www.google.com/">GOOGLE</option>
    <option value="http://www.altavista.com/">ALTAVISTA</option>
    <option value="http://www.amazon.com/">AMAZON</option>
    <option value="https://artlung.com/">ARTLUNG</option>
</select>
<a href="#Go" onclick="document.location.href=document.goForm.mySelectbox.options[document.goForm.mySelectbox.selectedIndex].value;"><img src="https://artlung.com/images/go.gif" value="Go" border="0" /></a>
</form>

<pre>
&lt;form action=&quot;/&quot; name=&quot;goForm&quot;&gt;
&lt;select name=&quot;mySelectbox&quot;&gt;
    &lt;option value=&quot;&quot;&gt;Choose a destination...&lt;/option&gt;
    &lt;option value=&quot;http://www.yahoo.com/&quot;&gt;YAHOO&lt;/option&gt;
    &lt;option value=&quot;http://www.google.com/&quot;&gt;GOOGLE&lt;/option&gt;
    &lt;option value=&quot;http://www.altavista.com/&quot;&gt;ALTAVISTA&lt;/option&gt;
    &lt;option value=&quot;http://www.amazon.com/&quot;&gt;AMAZON&lt;/option&gt;
    &lt;option value=&quot;https://artlung.com/&quot;&gt;ARTLUNG&lt;/option&gt;
&lt;/select&gt;
&lt;a href=&quot;#Go&quot; onclick=&quot;document.location.href=document.goForm.mySelectbox.options[document.goForm.mySelectbox.selectedIndex].value;&quot;&gt;&lt;img src=&quot;https://artlung.com/images/go.gif&quot; value=&quot;Go&quot; border=&quot;0&quot; /&gt;&lt;/a&gt;
&lt;/form&gt;
</pre>



<?php
$lab->printFooter([
	'comments' => true
]);
