<?php
require_once __DIR__ . '/../../loader.php';
$lab = new Lab();
$lab->printHeader(
    '
Navigation Function (in PHP and ASP)
'
);

?>

    <h1>Navigation Function (in PHP and ASP)</h1>

    <p>In the websites I build, I often use a function to do navigation that "toggles" based on where we are in the
        site. These are those functions, in two languages: PHP and ASP.</p>

    <h2>ASP Source Code</h2>
    <pre>
<b>&lt;%</b>
REM --------------------------------
<b>function navToggleState(my_url, title, linktext, my_class)
   REQUEST_URI = Request.ServerVariables("SCRIPT_NAME")
   theRequest = REQUEST_URI
   theLink = my_url
  
   firstTwoCharsRequest = Mid(theLink,7,2)
   firstTwoCharsLink = Mid(theRequest,7,2)
  
   If (REQUEST_URI = theLink) Then
      RESPONSE.WRITE "&lt;span class=""" &amp; my_class &amp; """ title=""" &amp; title &amp; "- YOU ARE HERE.""&gt;" &amp; linktext &amp; "&lt;/span&gt;"
   Elseif (firstTwoCharsLink=firstTwoCharsRequest) then
      RESPONSE.WRITE "&lt;a href=""" &amp; my_url &amp; """ title=""" &amp; title &amp; """ class=""" &amp; my_class &amp; "Active""&gt;" &amp; linktext &amp; "&lt;/a&gt;"
   Else  
      RESPONSE.WRITE "&lt;a href=""" &amp; my_url &amp; """ title=""" &amp; title &amp; """ class=""" &amp; my_class &amp; """&gt;" &amp; linktext &amp; "&lt;/a&gt;"
   End If
End Function</b>
REM --------------------------------
REM usage:
REM navToggleState("/", "The WebSanDiego.org Home Page", "WebSanDiego", "nav");
REM results in
REM &lt;span class="nav" title="The WebSanDiego.org Home Page- YOU ARE HERE"&gt;WebSanDiego&lt;/span&gt;
REM or
REM &lt;a href="/" class="nav" title="The WebSanDiego.org Home Page"&gt;WebSanDiego&lt;/a&gt;
REM --------------------------------
<b>%&gt;</b>
</pre>

    <h2>PHP Source Code</h2>
    <pre>
<b>&lt;?php</b>
// --------------------------------
<b>function navToggleState($my_url, $title, $linktext, $my_class) {
   global $REQUEST_URI;
   $theRequest = $REQUEST_URI;
   $theLink = $my_url;
  
   $firstTwoCharsRequest = substr($theLink,6,2);
   $firstTwoCharsLink = substr($theRequest,6,2);
  
   if ($REQUEST_URI == $theLink) {
      echo "&lt;span class=\"$my_class\" title=\"$title - YOU ARE HERE.\"&gt;" . $linktext . "&lt;/span&gt;";
   } else if ($firstTwoCharsLink==$firstTwoCharsRequest) {
      echo "&lt;a href=\"$my_url\" title=\"$title\" class=\"$my_class" . "Active" . "\"&gt;$linktext&lt;/a&gt;";
   } else { 
      echo "&lt;a href=\"$my_url\" title=\"$title\" class=\"$my_class\"&gt;$linktext&lt;/a&gt;";
   } 

};</b>
// --------------------------------
// usage:
// navToggleState("/", "The WebSanDiego.org Home Page", "WebSanDiego", "nav");
// results in
// &lt;span class="nav" title="The WebSanDiego.org Home Page- YOU ARE HERE"&gt;WebSanDiego&lt;/span&gt;
// or
// &lt;a href="/" class="nav" title="The WebSanDiego.org Home Page"&gt;WebSanDiego&lt;/a&gt;
// --------------------------------
<b>?&gt;</b>
</pre>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
