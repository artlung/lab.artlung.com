<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
Checkbox Validator
<?php include_once("../inc.header2of2.php"); ?>

<p align="right">Created: 12/16/2001</p>

<h1>Checkbox Validator</h1>

<p>Just a simple script to do validation for checkboxes. It validates user input to assure that there aren't too many checked, and not too few chosen.</p>

<p><a href="#source">Source code for the function at the bottom of the page.</a></p>

<hr noshade size="1">

<form action="./" name="myform" onsubmit="return howManyChecked('myform','cb_industry',6,1,'Industry');">
<p>
<b>What is Your Industry?<br>
[ You must select at least 1 and no more than 6 for this question. ] </b>
</p>

<table border="0" cellspacing="0" cellpadding="2">
<tr>
<td class="NAV" align="LEFT" valign="TOP">
<input type="CHECKBOX" name="cb_industry" value="1000" id="cbi1000"><label for="cbi1000">&nbsp;Airport Construction</label><br>
<input type="CHECKBOX" name="cb_industry" value="1001" id="cbi1001"><label for="cbi1001">&nbsp;Architecture</label><br>
<input type="CHECKBOX" name="cb_industry" value="1003" id="cbi1003"><label for="cbi1003">&nbsp;Caisson/Foundation</label><br>
<input type="CHECKBOX" name="cb_industry" value="1004" id="cbi1004"><label for="cbi1004">&nbsp;Ceiling Construction</label><br>
<input type="CHECKBOX" name="cb_industry" value="1005" id="cbi1005"><label for="cbi1005">&nbsp;Commercial Construction - Design Build</label><br>
<input type="CHECKBOX" name="cb_industry" value="1088" id="cbi1088"><label for="cbi1088">&nbsp;Commercial Construction - General</label><br>
<input type="CHECKBOX" name="cb_industry" value="1006" id="cbi1006"><label for="cbi1006">&nbsp;Commercial Construction - Health Care/Hospital</label><br>
<input type="CHECKBOX" name="cb_industry" value="1008" id="cbi1008"><label for="cbi1008">&nbsp;Commercial Construction - Hi-Tech</label><br>
<input type="CHECKBOX" name="cb_industry" value="1007" id="cbi1007"><label for="cbi1007">&nbsp;Commercial Construction - Highrise</label><br>
<input type="CHECKBOX" name="cb_industry" value="1009" id="cbi1009"><label for="cbi1009">&nbsp;Commercial Construction - Hotel</label><br>
<input type="CHECKBOX" name="cb_industry" value="1010" id="cbi1010"><label for="cbi1010">&nbsp;Commercial Construction - Multi-Family</label><br>
<input type="CHECKBOX" name="cb_industry" value="1101" id="cbi1101"><label for="cbi1101">&nbsp;Commercial Construction - Retail</label><br>
<input type="CHECKBOX" name="cb_industry" value="1011" id="cbi1011"><label for="cbi1011">&nbsp;Commercial Construction - School</label><br>
<input type="CHECKBOX" name="cb_industry" value="1012" id="cbi1012"><label for="cbi1012">&nbsp;Commercial Construction - Tenant Improvement</label><br>
<input type="CHECKBOX" name="cb_industry" value="1090" id="cbi1090"><label for="cbi1090">&nbsp;Commercial Development</label><br>
<input type="CHECKBOX" name="cb_industry" value="1013" id="cbi1013"><label for="cbi1013">&nbsp;Concrete Const - Bridges</label><br>
<input type="CHECKBOX" name="cb_industry" value="1014" id="cbi1014"><label for="cbi1014">&nbsp;Concrete Const - Commercial</label><br>
<input type="CHECKBOX" name="cb_industry" value="1015" id="cbi1015"><label for="cbi1015">&nbsp;Concrete Const - Site (C&amp;G, Sidewalk, Driveway)</label><br>
<input type="CHECKBOX" name="cb_industry" value="1016" id="cbi1016"><label for="cbi1016">&nbsp;Concrete Const - White Paving</label><br>
<input type="CHECKBOX" name="cb_industry" value="1105" id="cbi1105"><label for="cbi1105">&nbsp;Concrete Const-U/G Str's, Box Culverts, Pump Sta</label><br>
<input type="CHECKBOX" name="cb_industry" value="1017" id="cbi1017"><label for="cbi1017">&nbsp;Construction Management - HHWAY, Civil</label><br>
<input type="CHECKBOX" name="cb_industry" value="1084" id="cbi1084"><label for="cbi1084">&nbsp;Construction Management-Commercial</label><br>
<input type="CHECKBOX" name="cb_industry" value="1102" id="cbi1102"><label for="cbi1102">&nbsp;Construction Products-Correctional/Security</label><br>
<input type="CHECKBOX" name="cb_industry" value="1089" id="cbi1089"><label for="cbi1089">&nbsp;Construction Products-Electrical</label><br>
<input type="CHECKBOX" name="cb_industry" value="1103" id="cbi1103"><label for="cbi1103">&nbsp;Construction Products-Mechanical</label><br>
<input type="CHECKBOX" name="cb_industry" value="1099" id="cbi1099"><label for="cbi1099">&nbsp;Construction Software</label><br>
<input type="CHECKBOX" name="cb_industry" value="1018" id="cbi1018"><label for="cbi1018">&nbsp;Corrections/Prisons</label><br>
<input type="CHECKBOX" name="cb_industry" value="1019" id="cbi1019"><label for="cbi1019">&nbsp;Crane &amp; Rigging</label><br>
<input type="CHECKBOX" name="cb_industry" value="1020" id="cbi1020"><label for="cbi1020">&nbsp;Demolition Construction</label><br>
<input type="CHECKBOX" name="cb_industry" value="1021" id="cbi1021"><label for="cbi1021">&nbsp;Design Engineering</label><br>
<input type="CHECKBOX" name="cb_industry" value="1022" id="cbi1022"><label for="cbi1022">&nbsp;Dredging Construction</label><br>
<input type="CHECKBOX" name="cb_industry" value="1075" id="cbi1075"><label for="cbi1075">&nbsp;Drilling and Blasting</label><br>
<input type="CHECKBOX" name="cb_industry" value="1023" id="cbi1023"><label for="cbi1023">&nbsp;Drywall Construction</label><br>
<input type="CHECKBOX" name="cb_industry" value="1024" id="cbi1024"><label for="cbi1024">&nbsp;Earthwork Construction</label><br>
<input type="CHECKBOX" name="cb_industry" value="1081" id="cbi1081"><label for="cbi1081">&nbsp;Electrical Construction - (Signals,Rdwy Lighting)</label><br>
<input type="CHECKBOX" name="cb_industry" value="1025" id="cbi1025"><label for="cbi1025">&nbsp;Electrical Construction-Commercial</label><br>
<input type="CHECKBOX" name="cb_industry" value="1026" id="cbi1026"><label for="cbi1026">&nbsp;Environmental - Remediation</label><br>
<input type="CHECKBOX" name="cb_industry" value="1107" id="cbi1107"><label for="cbi1107">&nbsp;Environmental - Water &amp; Wastewater Treatment</label><br>
<input type="CHECKBOX" name="cb_industry" value="1027" id="cbi1027"><label for="cbi1027">&nbsp;Equipment Rental</label><br>
<input type="CHECKBOX" name="cb_industry" value="1100" id="cbi1100"><label for="cbi1100">&nbsp;Equipment Rental-Aerial/Scaffold</label><br>
<input type="CHECKBOX" name="cb_industry" value="1028" id="cbi1028"><label for="cbi1028">&nbsp;Facilities Management</label><br>
<input type="CHECKBOX" name="cb_industry" value="1091" id="cbi1091"><label for="cbi1091">&nbsp;Fence Construction</label><br>
<input type="CHECKBOX" name="cb_industry" value="1029" id="cbi1029"><label for="cbi1029">&nbsp;Fire Sprinkler Construction</label><br>
<input type="CHECKBOX" name="cb_industry" value="1030" id="cbi1030"><label for="cbi1030">&nbsp;Flooring</label><br>
<input type="CHECKBOX" name="cb_industry" value="1031" id="cbi1031"><label for="cbi1031">&nbsp;General Engineering - Private/Grading &amp; Paving</label><br>
<input type="CHECKBOX" name="cb_industry" value="1032" id="cbi1032"><label for="cbi1032">&nbsp;General Engineering - Public/Grading &amp; Paving</label><br>
<input type="CHECKBOX" name="cb_industry" value="1033" id="cbi1033"><label for="cbi1033">&nbsp;Geotechnical</label><br>
<input type="CHECKBOX" name="cb_industry" value="1034" id="cbi1034"><label for="cbi1034">&nbsp;Glazing/Curtain Wall Constr</label><br>
<input type="CHECKBOX" name="cb_industry" value="1079" id="cbi1079"><label for="cbi1079">&nbsp;Guardrail/Signing</label><br>
<input type="CHECKBOX" name="cb_industry" value="1035" id="cbi1035"><label for="cbi1035">&nbsp;Heavy Highway-Dirt,U/G,Paving</label><br>
<input type="CHECKBOX" name="cb_industry" value="1036" id="cbi1036"><label for="cbi1036">&nbsp;Heavy Highway-Structures</label><br>
<input type="CHECKBOX" name="cb_industry" value="1037" id="cbi1037"><label for="cbi1037">&nbsp;Industrial Construction</label><br>
<input type="CHECKBOX" name="cb_industry" value="1082" id="cbi1082"><label for="cbi1082">&nbsp;Instrumentation</label><br>
<input type="CHECKBOX" name="cb_industry" value="1097" id="cbi1097"><label for="cbi1097">&nbsp;Insulation</label><br>
</td>
<td class="NAV" valign="TOP">
<input type="CHECKBOX" name="cb_industry" value="1094" id="cbi1094"><label for="cbi1094">&nbsp;Landscape</label><br>
<input type="CHECKBOX" name="cb_industry" value="1038" id="cbi1038"><label for="cbi1038">&nbsp;Marine/Dock Construction</label><br>
<input type="CHECKBOX" name="cb_industry" value="1093" id="cbi1093"><label for="cbi1093">&nbsp;Masonry Construction</label><br>
<input type="CHECKBOX" name="cb_industry" value="1039" id="cbi1039"><label for="cbi1039">&nbsp;Material Production - Asphalt</label><br>
<input type="CHECKBOX" name="cb_industry" value="1076" id="cbi1076"><label for="cbi1076">&nbsp;Material Production - Building Products</label><br>
<input type="CHECKBOX" name="cb_industry" value="1040" id="cbi1040"><label for="cbi1040">&nbsp;Material Production - Concrete</label><br>
<input type="CHECKBOX" name="cb_industry" value="1041" id="cbi1041"><label for="cbi1041">&nbsp;Material Production - Sand &amp; Gravel</label><br>
<input type="CHECKBOX" name="cb_industry" value="1042" id="cbi1042"><label for="cbi1042">&nbsp;Mechanical Construction - HVAC-Dry</label><br>
<input type="CHECKBOX" name="cb_industry" value="1043" id="cbi1043"><label for="cbi1043">&nbsp;Mechanical Construction - HVAC-Wet</label><br>
<input type="CHECKBOX" name="cb_industry" value="1044" id="cbi1044"><label for="cbi1044">&nbsp;Mechanical Construction - Plumbing</label><br>
<input type="CHECKBOX" name="cb_industry" value="1045" id="cbi1045"><label for="cbi1045">&nbsp;Mechanical Construction - Process Piping</label><br>
<input type="CHECKBOX" name="cb_industry" value="1106" id="cbi1106"><label for="cbi1106">&nbsp;Mechanical Construction - Service</label><br>
<input type="CHECKBOX" name="cb_industry" value="1046" id="cbi1046"><label for="cbi1046">&nbsp;Mechanical Design</label><br>
<input type="CHECKBOX" name="cb_industry" value="1047" id="cbi1047"><label for="cbi1047">&nbsp;Micro Tunneling</label><br>
<input type="CHECKBOX" name="cb_industry" value="1048" id="cbi1048"><label for="cbi1048">&nbsp;Mine Construction</label><br>
<input type="CHECKBOX" name="cb_industry" value="1092" id="cbi1092"><label for="cbi1092">&nbsp;Oil &amp; Gas-Offshore Platform Construction</label><br>
<input type="CHECKBOX" name="cb_industry" value="1049" id="cbi1049"><label for="cbi1049">&nbsp;Oil &amp; Gas-Onshore Pipieline</label><br>
<input type="CHECKBOX" name="cb_industry" value="1050" id="cbi1050"><label for="cbi1050">&nbsp;Painting Construction</label><br>
<input type="CHECKBOX" name="cb_industry" value="1077" id="cbi1077"><label for="cbi1077">&nbsp;Pavement Grinding/Rehab</label><br>
<input type="CHECKBOX" name="cb_industry" value="1051" id="cbi1051"><label for="cbi1051">&nbsp;Petro-Chemical</label><br>
<input type="CHECKBOX" name="cb_industry" value="1052" id="cbi1052"><label for="cbi1052">&nbsp;Piledriving</label><br>
<input type="CHECKBOX" name="cb_industry" value="1053" id="cbi1053"><label for="cbi1053">&nbsp;Plumbing</label><br>
<input type="CHECKBOX" name="cb_industry" value="1054" id="cbi1054"><label for="cbi1054">&nbsp;Power - Co-Generation</label><br>
<input type="CHECKBOX" name="cb_industry" value="1055" id="cbi1055"><label for="cbi1055">&nbsp;Power - Fossil Fuel</label><br>
<input type="CHECKBOX" name="cb_industry" value="1056" id="cbi1056"><label for="cbi1056">&nbsp;Power - Geothermal</label><br>
<input type="CHECKBOX" name="cb_industry" value="1057" id="cbi1057"><label for="cbi1057">&nbsp;Power - Hydroelectric</label><br>
<input type="CHECKBOX" name="cb_industry" value="1058" id="cbi1058"><label for="cbi1058">&nbsp;Power - Nuclear</label><br>
<input type="CHECKBOX" name="cb_industry" value="1059" id="cbi1059"><label for="cbi1059">&nbsp;Precast Concrete - Architectural</label><br>
<input type="CHECKBOX" name="cb_industry" value="1060" id="cbi1060"><label for="cbi1060">&nbsp;Precast Concrete - Structural</label><br>
<input type="CHECKBOX" name="cb_industry" value="1061" id="cbi1061"><label for="cbi1061">&nbsp;Precast Concrete - Utility (Pipe,Manholes,Vaults)</label><br>
<input type="CHECKBOX" name="cb_industry" value="1085" id="cbi1085"><label for="cbi1085">&nbsp;Precast-Modular Systems</label><br>
<input type="CHECKBOX" name="cb_industry" value="1062" id="cbi1062"><label for="cbi1062">&nbsp;Prestressed Concrete</label><br>
<input type="CHECKBOX" name="cb_industry" value="1063" id="cbi1063"><label for="cbi1063">&nbsp;Pulp &amp; Paper</label><br>
<input type="CHECKBOX" name="cb_industry" value="1064" id="cbi1064"><label for="cbi1064">&nbsp;Railroad Construction</label><br>
<input type="CHECKBOX" name="cb_industry" value="1065" id="cbi1065"><label for="cbi1065">&nbsp;Rebar</label><br>
<input type="CHECKBOX" name="cb_industry" value="1095" id="cbi1095"><label for="cbi1095">&nbsp;Residential Constr - Single Family(Luxury)</label><br>
<input type="CHECKBOX" name="cb_industry" value="1066" id="cbi1066"><label for="cbi1066">&nbsp;Residential Constr - Single Family(Production)</label><br>
<input type="CHECKBOX" name="cb_industry" value="1067" id="cbi1067"><label for="cbi1067">&nbsp;Roofing</label><br>
<input type="CHECKBOX" name="cb_industry" value="1083" id="cbi1083"><label for="cbi1083">&nbsp;Specialty (Doors, Hardware, Fixtures, Cabinets)</label><br>
<input type="CHECKBOX" name="cb_industry" value="1080" id="cbi1080"><label for="cbi1080">&nbsp;Striping</label><br>
<input type="CHECKBOX" name="cb_industry" value="1087" id="cbi1087"><label for="cbi1087">&nbsp;Structural Engineering</label><br>
<input type="CHECKBOX" name="cb_industry" value="1068" id="cbi1068"><label for="cbi1068">&nbsp;Structural Steel</label><br>
<input type="CHECKBOX" name="cb_industry" value="1078" id="cbi1078"><label for="cbi1078">&nbsp;Traffic Control</label><br>
<input type="CHECKBOX" name="cb_industry" value="1069" id="cbi1069"><label for="cbi1069">&nbsp;Transportation Design</label><br>
<input type="CHECKBOX" name="cb_industry" value="1074" id="cbi1074"><label for="cbi1074">&nbsp;Treatment Plant Construction (WWTP/WTP)</label><br>
<input type="CHECKBOX" name="cb_industry" value="1104" id="cbi1104"><label for="cbi1104">&nbsp;Treatment Plant O &amp; M (WWTP/WTP)</label><br>
<input type="CHECKBOX" name="cb_industry" value="1098" id="cbi1098"><label for="cbi1098">&nbsp;Trucking</label><br>
<input type="CHECKBOX" name="cb_industry" value="1070" id="cbi1070"><label for="cbi1070">&nbsp;Tunnel Construction</label><br>
<input type="CHECKBOX" name="cb_industry" value="1072" id="cbi1072"><label for="cbi1072">&nbsp;Underground Construction (Storm Drain,Sewer,Water)</label><br>
<input type="CHECKBOX" name="cb_industry" value="1086" id="cbi1086"><label for="cbi1086">&nbsp;Underground Utilities-Pipe Rehab-Bursting,Slipling</label><br>
<input type="CHECKBOX" name="cb_industry" value="1071" id="cbi1071"><label for="cbi1071">&nbsp;Utilities (Phone,Electric,Gas,Cable)</label><br>
<input type="CHECKBOX" name="cb_industry" value="1096" id="cbi1096"><label for="cbi1096">&nbsp;Waterproofing</label><br>
<input type="CHECKBOX" name="cb_industry" value="1073" id="cbi1073"><label for="cbi1073">&nbsp;Welding</label><br>
		</td>
	</tr>
</table>
<input type="submit" value="Submit your answer">
</form>

<hr noshade size="1">

<p><a name="source"><b>The Source Code of the Function:</b></a> (this goes in the <b>&lt;head&gt;</b> of the document)</p>
<pre>
&lt;script type="text/javascript" language="JavaScript"&gt;
<b>/*
   written by joe crawford, for fun.
   it's friday!	
   12/14/2001.
*/</b>
function howManyChecked(whichForm,whichCheckBoxArray,myMax,myMin,whichQuestion)
<b>/*
  This function takes 5 paramaters:
  whichForm -- the NAME of the form to be validated, a string
  whichCheckBoxArray -- the NAME of the checkbox to be checked, a string
  myMax -- the most you want the user to be able to check, an integer
  myMin -- the least you want the user to be able to check, an integer
  whichQuestion -- a short description of the question, a string
  
  example use:
  howManyChecked('myform','cb_industry',6,1,'Industry');
*/</b>
{
	var _countChecked = 0;
	var err = 0;
<b>	/* iterate through all the elements in the checkbox array */</b>
	for(i=0;i&lt;document[whichForm][whichCheckBoxArray].length;i++)
	{
		<b>/* and check to see if each is checked */</b>
		if(document[whichForm][whichCheckBoxArray][i].checked==true)
			<b>/* if it is, increment a counter */</b>
			{ _countChecked++; }
	}
	<b>/* is the count too high? */</b>
	if(_countChecked &gt; myMax)
		{ alert('Limit '+myMax+' checks for the '+whichQuestion+' question.');
			err = 1;}
	<b>/* of is the count too low */</b>
	else if(_countChecked &lt; myMin)
		{ alert('You must fill out at least '+myMin+' entry(s) for the '+whichQuestion+' question.');
			err = 1;}
	if (err == 1) { return false; }
}

&lt;/script&gt;
</pre>

<p><a name="source"><b>The Source Code for invoking it:</b></a> (this goes in <b>&lt;form&gt;</b> tag)</p>

<pre>
&lt;form
	action="http://www.artlung.com/"
	name="myform"
	onsubmit="<b>return howManyChecked('myform','cb_industry',6,1,'Industry');</b>"&gt;
</pre>


<?php include_once("../inc.footer.php"); ?>
