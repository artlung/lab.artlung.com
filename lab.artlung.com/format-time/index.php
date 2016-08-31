<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>




	Date Formatting 

<script language="JavaScript" type="text/javascript">
<!--
/* JavaScript originally by David Turley <dturley@pobox.com> */
function makeArray() {
     for (i = 0; i<makeArray.arguments.length; i++)
         this[i] = makeArray.arguments[i];
 }
 
function getFullYear(d) {
    var y = d.getYear();
    if (y < 1000) {y += 1900};
    return y;
}

var days = new makeArray("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
var months = new makeArray("January","February","March","April","May","June","July","August","September","October","November","December");

function format_time(t) {
   var Day = t.getDay();
   var Date = t.getDate();
   var Month = t.getMonth();
   var Year = getFullYear(t);
   timeString = "";
   timeString += days[Day];
   timeString += " ";
   timeString += months[Month];
   timeString += " ";
   timeString += Date;
   timeString += ", ";
   timeString += Year;
   return timeString;
}
// -->
</script> 


<?php include_once("../inc.header2of2.php"); ?>
<p align="right">
	Created: June 1998; modified: August 1999; Updated October 2002 
</p>

<h1>JavaScript Date Formatting Demo</h1> 

<script language="JavaScript">
<!--
m = new Date(document.lastModified);
d = new Date();
document.write("<p>The normal <i>document.lastModified\</i> string: "+m+"<br>");
document.write("The modification date after formatting: "+format_time(m)+"</p>");
// -->
</script> 

<pre>
&lt;script language="JavaScript" type="text/javascript"&gt;
&lt;!--
<b>function makeArray() {
     for (i = 0; i&lt;makeArray.arguments.length; i++)
         this[i] = makeArray.arguments[i];
 }
 
function getFullYear(d) {
    var y = d.getYear();
    if (y &lt; 1000) {y += 1900};
    return y;
}

var days = new makeArray("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
var months = new makeArray("January","February","March","April","May","June","July","August","September","October","November","December");

function format_time(t) {
   var Day = t.getDay();
   var Date = t.getDate();
   var Month = t.getMonth();
   var Year = getFullYear(t);
   timeString = "";
   timeString += days[Day];
   timeString += " ";
   timeString += months[Month];
   timeString += " ";
   timeString += Date;
   timeString += ", ";
   timeString += Year;
   return timeString;
}</b>
// --&gt;
&lt;/script&gt; 


&lt;script language="JavaScript"&gt;
&lt;!--
<b>m = new Date(document.lastModified);
d = new Date();
document.write("The normal &lt;I&gt;document.lastModified\&lt;/i&gt; string: "+m+"&lt;br&gt;");
document.write("The modification date after formatting: "+format_time(m)+"&lt;p&gt;");</b>
// --&gt;
&lt;/script&gt; 
</pre>




<?php include_once("../inc.footer.php"); ?>


