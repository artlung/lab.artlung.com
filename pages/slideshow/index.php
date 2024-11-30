<!--DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Frameset//EN"
                        "http://www.w3.org/TR/REC-html40/frameset.dtd" -->
<HTML>
<HEAD>
        <TITLE>Slideshow Demo</TITLE>
<SCRIPT>
//- ******************************************************** -/
//- THE ARRAY OF WEBPAGES, THIS SHOULD BE A COMMA DELIMITED --/
//- LIST OF URLS - ANY URL WILL DO, AS LONG AS IT'S A LEGAL --/
//- ONE. YOU CAN REFERENCE LOCAL FILES OR EXTERNAL ONES ------/
//- ONE NOTE - IT SHOULD BE ALL ON ONE LINE - OTHERWISE ------/
//- YOU'RE BOUND TO GET ERRORS -------------------------------/

var pagesArray = new Array( 'https://artlung.com/', 'https://www.artlung.com/resume/','https://www.urmcargo.com/','https://tilde.club/~artlung/' );

//- ******************************************************** -/
//- ******************************************************** -/
//- THE VARIABLE THAT KEEPS TRACK OF WHERE WE ARE IN ---------/
//- THE ARRAY ------------------------------------------------/

x_go = 0

//- ******************************************************** -/
//- ******************************************************** -/
//- THE FUNCTION THAT DOES THE ACTUAL PAGE GETTING -----------/
	function SlideShowGo(inputNumber) {
		x_go = x_go + inputNumber;
		//- IF OUTSIDE OF THE ARRAY, BRING US BACK IN ------------/

		if (x_go > (pagesArray.length-1)) x_go = pagesArray.length-1;

		if (x_go < 0) x_go = 0;

		//- GRAB THE PAGE AND STICK IT IN THE PAGE ---------------/
	
		top.frames[1].location = pagesArray[x_go]
	}
</SCRIPT>
</HEAD>
<FRAMESET ROWS="26,*" BORDER=0 FRAMESPACING=0 FRAMEBORDER=NO>
        <FRAME SCROLLING=NO NAME="NAVIGATIONAL_FRAME" MARGINWIDTH=0 MARGINHEIGHT=0
			SRC="this_nav.html<?php
        echo '?' . filemtime('this_nav.html');
            ?>">
        <FRAME SCROLLING=AUTO NAME="CONTENT_FRAME" MARGINWIDTH=1 MARGINHEIGHT=1 SRC="loading.php<?php
        echo '?' . filemtime('loading.php');
        ?>">
</FRAMESET>
</HTML>
