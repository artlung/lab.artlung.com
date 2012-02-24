<?php include_once("../inc.functions.php") ?>
<?php include_once("../inc.header1of2.php") ?>
outline: none CSS property
<?php include_once("../inc.header2of2.php") ?>


<p align="right">Created January 2001; Updated July 2001</p>

<h1>outline: none CSS property</h1>

<h2><a
       href="http://www.artlung.com/">ArtLung.com</a> rocks!</h2>

<h2><a
       style="outline: none;"
       href="mailto:example@example.com">email me.</a></h2>

<p>The email link above has a style set to "outline: none" - the
first link does not. IE5 for the Mac appears to respect the style as
set. It prevents the -to some people- annoying "focus" outline which IE5 adds.
On IE5/WinNT this property does not do anything. <i><a href="/scripting/the-problem-with-blur/">This is a separate issue</a></i>. Francis U. sent me a note that Mozilla 0.92 does not respect the outline:none property, sadly. If you have additional feedback about this property in your browser of choice just <a href="http://artlung.com/feedback/">let me know</a>.
</p>

<dl>
<dt>
A reference with some more information on this CSS2 property:
</dt>
<dd>
<a href="http://www.blooberry.com/indexdot/css/properties/outline/outline.htm">http://www.blooberry.com/indexdot/css/properties/outline/outline.htm</a>
</dd>

<dt>
And another:
</dt>
<dd>
<a href="http://www.blooberry.com/indexdot/css/properties/outline.htm">http://www.blooberry.com/indexdot/css/properties/outline.htm</a>
</dd>

<dt>
The official spec:
</dt>
<dd>
<a href="http://www.w3.org/TR/REC-CSS2/ui.html#dynamic-outlines">http://www.w3.org/TR/REC-CSS2/ui.html#dynamic-outlines</a><br>
<a href="http://www.w3.org/TR/REC-CSS2/ui.html#q5">http://www.w3.org/TR/REC-CSS2/ui.html#q5</a>
</dd>

</dl>

<?php include_once("../inc.footer.php"); ?>