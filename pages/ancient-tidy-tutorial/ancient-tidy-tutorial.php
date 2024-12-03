<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('Using HTML Tidy under Windows');

?>


<p class="date-attribution">Created 11/1999</p>
<h1>Using Tidy under Windows</h1>
<p><span style="color:#FF3300">[THIS DOCUMENT IS NOT COMPLETE]</span></p> 
<hr noshade>
<h2>Quick and Dirty Instructions</h2>

<div class="fixed">
<ol>
	<li>
		Read about Tidy at <a href="http://www.w3.org/People/Raggett/tidy/">http://www.w3.org/People/Raggett/tidy/</a>
	</li>
	<li>
		Download the DOS executable from <a href="http://www.w3.org/People/Raggett/tidy.exe">http://www.w3.org/People/Raggett/tidy.exe</a>
	</li>
	<li>
		Place it in your system folder; typically <strong>C:\Windows\</strong>
	</li>
	<li>
		<strong>Start -&gt; Programs -&gt; MS-DOS Prompt</strong>
	</li>
	<li>
		Navigate, in DOS, to where you want to
	</li>
	<li>
		Make a backup of your files!
	</li>
	<li>
		You can now execute <span style="color:#FF0000">Tidy Statements</span> - to manipulate files
	</li>
</ol>
</div>

<h2>The full list of options you can set with HTML Tidy</h2>
<pre>
<span style="color:#FF0000;">tidy
  -config <span style="color:#3333FF">file</span>        <span style="color:#000000">read config file</span>
  -indent <span style="color:#666666">or</span> -i       <span style="color:#000000">indent element content</span>
  -omit <span style="color:#666666">or</span> -o         <span style="color:#000000">omit optional endtags</span>
  -wrap 72            <span style="color:#000000">wrap text at column 72 (default is 68)</span>
  -upper <span style="color:#666666">or</span> -u        <span style="color:#000000">force tags to upper case (default is lower)</span>
  -clean <span style="color:#666666">or</span> -c        <span style="color:#000000">replace font, nobr &amp; center tags by CSS</span>
  -raw                <span style="color:#000000">don't o/p entities for chars 128 to 255</span>
  -ascii              <span style="color:#000000">use ASCII for output, Latin-1 for input</span>
  -latin1             <span style="color:#000000">use Latin-1 for both input and output</span>
  -utf8               <span style="color:#000000">use UTF-8 for both input and output</span>
  -iso2022            <span style="color:#000000">use ISO2022 for both input and output</span>
  -numeric <span style="color:#666666">or</span> -n      <span style="color:#000000">output numeric rather than named entities</span>
  -modify <span style="color:#666666">or</span> -m       <span style="color:#000000">to modify original files</span>
  -errors <span style="color:#666666">or</span> -e       <span style="color:#000000">show only error messages</span>
  -quiet <span style="color:#666666">or</span> -q        <span style="color:#000000">suppress non-essential output</span>
  -f <span style="color:#3333FF">file</span>             <span style="color:#000000">write errors to file</span>
  -xml                <span style="color:#000000">use this when input is in XML</span>
  -asxml              <span style="color:#000000">to convert HTML to XML</span>
  -slides             <span style="color:#000000">to burst into slides on h2 elements</span>
  -help               <span style="color:#000000">list command line options</span>
</span>
                     +--------------------------------------------------+
                     |  *<span style="color:#FF0000">Tidy Commands in Red                           </span>|
                     |  *<span style="color:#3333FF">Files in Blue</span>                                  |
                     |  *<span style="color:#000000">Explanations in Black</span>                          |
                     +--------------------------------------------------+
</pre> 
<hr noshade>
<h2>So what does this look like on the DOS Command Line</h2>
<pre>
<span style="color:#666666">C:\WINDOWS\Desktop&gt;<span style="color:#FF0000">tidy -i -m -wrap 400 -upper -f <span style="color:#3333FF">errors.txt</span> <span style="color:#3333FF">foo.html</span></span></span>
                   ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
                   <span style="color:#000000">This is the actual HTML Tidy Command Line Statement</span>
</pre> 
<hr noshade>
<h2>Oh yeah? Well whazzat mean?</h2>
<pre>
<span style="color:#666666">C:\WINDOWS\Desktop&gt;</span>    The DOS Prompt - in this case this is the desktop.
  <span style="color:#FF0000">tidy</span>                 call Tidy (Tidy wants to live C:\Windows to work)
  <span style="color:#FF0000">-i</span>                   Cause resulting page to have indenting
  <span style="color:#FF0000">-m</span>                   Modifies the document in place
                       (Backups are advisable)
  <span style="color:#FF0000">-wrap 400</span>            Tidy wraps by default at 68 characters - here we
                       specify wrapping at 400
  <span style="color:#FF0000">-upper</span>               Makes the tags themselves UPPERCASE
  <span style="color:#FF0000">-f</span> <span style="color:#3333FF">errors.txt</span>        Log errors into a file called errors.txt which
                       will be placed in the same directory).
  <span style="color:#3333FF">foo.html</span>             The file tidy will work on and modify.

</pre> 

<h2>Parting Words</h2> 
<p>
	HTML Tidy is *very* cool, and very powerful. I advise caution in using this files, there are no built in "undo" features in Tidy - but it's a nice tool if you're faced with grotesque pages.
</p>


<?php
$lab->printFooter();
