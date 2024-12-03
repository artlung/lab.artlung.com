<?php

// This is a one off script to
// make a Tufte inspired date - 
// feel free to use it or play
// with it or whatever. I think
// it's kind of interesting.
// If you find a use for it,
// send me an email at joe@artlung.com
// I'd love to see it!
// 
// The PHP is kind of stupid - but 
// it was new to me when I wrote it
// originally. Like October of 1999
//
//
// 
// 	- Joe


$calendarbackground = "#FFFFFF";
$weekendcolor = "#CCFF00";
$weekdaycolor = "#99CC66";
$yearcolor = "#0033FF";
$firstmonthcolor = "#6699CC";
$lastmonthcolor = "#6666FF";
$firstyearcolor = "#0033FF";

$daysago = -7;       #mustbeminus
$daysforward = 21;   #mustbepositive

$monthsarray = array();
$yearsarray = array();

for ($i=$daysago;$i<=$daysforward;$i++)
{
	$monthsarray[] = date("m",strtotime("$i days"));
	$yearsarray[] = date("Y",strtotime("$i days"));
}





$totaldays = abs($daysago)+abs($daysforward)+1;


$fontopen = "<small>";
$fontclose = "</small>";

$firstmonthcount = 0;


############################################################################
#===========================================================================
print "<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=2 BGCOLOR=";
print $calendarbackground;
print ">";
#===========================================================================
print "<TR>\n";
#---------------------------------------------------------------------------
	print "\t<TD COLSPAN=";
	print abs($daysago);
	print " ALIGN=LEFT>";
	print $fontopen;
	print "&nbsp;";
	print $fontclose;
	print "</TD>\n";
#---------------------------------------------------------------------------
for ($i=$daysago; $i<=$daysforward; $i++)
	{
	if ($i==0)
		{
			print "\t<TD STYLE='text-align: center'>";
			print '<IMG SRC="images/cal_arrowdown.gif" ALT="X" WIDTH="23" HEIGHT="13" BORDER="0">';
			print "</TD>\n";
		};
	};
#---------------------------------------------------------------------------
	print "\t<TD COLSPAN=";
	print abs($daysforward);
	print " ALIGN=RIGHT>";
#	print abs($daysforward);
#	print " days into the future";
	print "&nbsp;</TD>\n";
#---------------------------------------------------------------------------
	print "</TR>\n";
#===========================================================================
	print "<TR>\n";
#---------------------------------------------------------------------------
	print "\t<TD STYLE='background-color: #000' COLSPAN=";
	print $totaldays;
	print "><img src='images/blank.gif' HEIGHT=1 WIDTH=1 ALT=''></TD>\n";
#---------------------------------------------------------------------------
	print "</TR>\n";
#===========================================================================
	print "<TR>\n";
#---------------------------------------------------------------------------
for ($i=$daysago; $i<=$daysforward; $i++)
	{
	$threeletterday = date("D", mktime(0,0,0,date("m")  ,date("d")+$i,date("Y")));
	print "\t<TD ALIGN=CENTER ";
	if ($threeletterday=="Sun"||$threeletterday=="Sat")
		{
		print "style='background-color: ";
		print $weekendcolor;
		print "'";
		}
		else
		{
			print "style='background-color: ";
		print $weekdaycolor;
		print "'";
		};
	print " >";
	print $fontopen;
	print "<small>";
	print $threeletterday;
	print "</small>";
	print $fontclose;
	print "</TD>\n";
	};
#---------------------------------------------------------------------------
	print "</TR>\n";
#===========================================================================
	print "<TR>\n";
#---------------------------------------------------------------------------
	print "\t<TD style='background-color: black' COLSPAN=";
	print $totaldays;
	print "><img src='images/blank.gif' HEIGHT=1 WIDTH=1 ALT=''></TD>\n";
#---------------------------------------------------------------------------
	print "</TR>\n";
#===========================================================================
	print "<TR>\n";
#---------------------------------------------------------------------------
for ($i=$daysago; $i<=$daysforward; $i++)
	{
	$threeletterday = date("D", mktime(0,0,0,date("m")  ,date("d")+$i,date("Y")));
	print "\t<TD ";
	if ($threeletterday=="Sun"||$threeletterday=="Sat")
		{
		print " style='background-color: #CCCCCC' ";
		}
	print "ALIGN=RIGHT>";
	print $fontopen;
	print date("j", mktime(0,0,0,date("m")  ,date("d")+$i,date("Y")));
	print $fontclose;
	print "</TD>\n";
	}
#---------------------------------------------------------------------------
	print "</TR>\n";
	print "<TR>\n";
#---------------------------------------------------------------------------
	print "</TR>\n";
#===========================================================================
	print "<TR>\n";
#---------------------------------------------------------------------------
	print "\t<TD BGCOLOR=BLACK COLSPAN=";
	print $totaldays;
	print "><img src='images/blank.gif' HEIGHT=1 WIDTH=1 ALT=''></TD>\n";
#---------------------------------------------------------------------------
	print "</TR>\n";
#===========================================================================
	print "<TR>\n";
#---------------------------------------------------------------------------

foreach($monthsarray as $month)
{
	print "\t<TD BGCOLOR=";
	print $firstmonthcolor;
	print "\" COLSPAN=\"1\"";
	print "\">$month";
	print "</TD>\n";
}
#---------------------------------------------------------------------------
	print "</TR>\n";
#===========================================================================
	print "<TR>\n";
#---------------------------------------------------------------------------
	print "\t<TD BGCOLOR=BLACK COLSPAN=";
	print $totaldays;
	print "><img src='images/blank.gif' HEIGHT=1 WIDTH=1 ALT=''></TD>\n";
#---------------------------------------------------------------------------
	print "</TR>\n";
#===========================================================================
	print "<TR>\n";
#---------------------------------------------------------------------------
foreach($yearsarray as $year)
{
	print "\t<TD BGCOLOR=";
	print $firstyearcolor;
	print "\" COLSPAN=\"1\"";
	print "\">$year";
	print "</TD>\n";
}
#---------------------------------------------------------------------------
	print "</TR>\n";
#===========================================================================
	print "<TR>\n";
#---------------------------------------------------------------------------
	print "\t<TD BGCOLOR=BLACK COLSPAN=";
	print $totaldays;
	print "><img src='images/blank.gif' HEIGHT=1 WIDTH=1 ALT=''></TD>\n";
#---------------------------------------------------------------------------
	print "</TR>\n";
#===========================================================================
	print "<TR>\n";
#---------------------------------------------------------------------------
	print "\t<TD COLSPAN=";
	print abs($daysago);
	print " ALIGN=LEFT>";
	print abs($daysago);
	print " days ago...";
	print "&nbsp;</TD>\n";
#---------------------------------------------------------------------------
for ($i=$daysago; $i<=$daysforward; $i++)
	{
	if ($i==0)
		{
			print "\t<TD ALIGN=CENTER'>";
			print '<IMG SRC="images/cal_arrowup.gif" ALT="X" WIDTH="23" HEIGHT="13" BORDER="0">';
			print "</TD>\n";
		};
	};
#---------------------------------------------------------------------------
	print "\t<TD COLSPAN=";
	print abs($daysforward);
	print " ALIGN=RIGHT>...";
	print abs($daysforward);
	print " days into the future";
	print "&nbsp;</TD>\n";
#---------------------------------------------------------------------------
	print "</TR>\n";
#===========================================================================
print "</TABLE>";

?>
