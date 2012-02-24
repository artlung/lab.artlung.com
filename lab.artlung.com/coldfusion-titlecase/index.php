<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
ColdFusion TitleCase Function
<?php include_once("../inc.header2of2.php"); ?>

<h1>ColdFusion TitleCase Function</h1> 

<pre>
<b>&lt;cfscript&gt;</b>
/*
 * function - titleCase()
 * accepts and returns string data
 * this function is similar to LCase or UCase,
 * <a href="http://livedocs.macromedia.com/coldfusion/6.1/htmldocs/functiob.htm">http://livedocs.macromedia.com/coldfusion/6.1/htmldocs/functiob.htm</a>
 * <a href="http://livedocs.macromedia.com/coldfusion/6.1/htmldocs/funca112.htm">http://livedocs.macromedia.com/coldfusion/6.1/htmldocs/funca112.htm</a>
 * it formats a string according to predefined rules.
 * first it separates test so that it is formatted
 * With All Words With Initial Capital Letters
 * And With The Rest Of The Letters In Lowercase,
 * then, it takes special cases and adjusts, for example,
 * it changes some words, like Of and The to of and the,
 * when they are not the first part of a string,
 * also, it adjusts for names like McKenna.
 * it was designed for the college database which was provided
 * in ALLCAPS.
 * questions? <a href="http://artlung.com/feedback/" target="_blank">http://artlung.com/feedback/</a>
 * 2003/04/22
*/

<b>function titleCase(string)  {
	if (len(string) gt 1)
	{
		string = lcase(string);

		if (refind("^[a-z]", string))  {
		string = ucase(left(string, 1)) &amp; right(string,
(len(string) - 1 ));
		}

		next = refind("[[:space:][:punct:]][a-z]", string);

		while (next)  {
			if (next lt (len(string) - 1)) {
			string = left(string, (next)) &amp; ucase(mid(string,
next+1, 1)) &amp;  right(string, (len(string) - (next + 1)));
			} else {
			string = left(string, (next)) &amp;
ucase(right(string, 1));
			}

		next = refind("[[:space:][:punct:]][a-z]", string, next);
		}
	} else {
	string = ucase(string);

	}
/* post fixes */
/* Recall that "Replace()" is case sensitive */
string = Replace(string," Of "," of ","ALL");
string = Replace(string," And "," and ","ALL");
string = Replace(string,"'S ","'s ","ALL");
string = Replace(string," At "," at ","ALL");
string = Replace(string," The "," the ","ALL");
string = Replace(string," For "," for ","ALL");
string = Replace(string," De "," de ","ALL");
string = Replace(string," Y "," y ","ALL");
string = Replace(string," In "," in ","ALL");

/* roman numerals */
string = Replace(string," Iii"," III","ALL");
string = Replace(string," Ii"," II","ALL");

/* specific cases of acronyms */
string = Replace(string,"Abc ","ABC ","ALL");
string = Replace(string,"Abcd","ABCD ","ALL");
string = Replace(string,"Aaa ","AAA ","ALL");
string = Replace(string,"Cbe ","CBE ","ALL");
string = Replace(string,"Cei ","CEI ","ALL");
string = Replace(string,"Itt ","ITT ","ALL");
string = Replace(string,"Mbti ","MBTI ","ALL");
string = Replace(string,"Cuny ","CUNY ","ALL");
string = Replace(string,"Suny ","SUNY ","ALL");
string = Replace(string,"Mta ","MTA ","ALL");
string = Replace(string,"Mti ","MTI ","ALL");
string = Replace(string,"Qpe ","QPE ","ALL");
string = Replace(string," Ogc "," OGC ","ALL");
string = Replace(string,"Tci ","TCI ","ALL");
string = Replace(string,"The Cdl ","The CDL ","ALL");
string = Replace(string,"The Mbf ","The MBF","ALL");
string = Replace(string,"Lpn","LPN","ALL");
string = Replace(string,"Cvph ","CVPH ","ALL");
string = Replace(string,"Dch ","DCH ","ALL");
string = Replace(string,"Bmr ","BMR ","ALL");
string = Replace(string,"Isim ","ISIM ","ALL");

/* contractions */
string = Replace(string," Mgt"," Management","ALL");
string = Replace(string,"Trng","Training","ALL");
string = Replace(string,"Xray","X-Ray","ALL");
string = Replace(string," Sch "," School ","ALL");
string = Replace(string," Dba "," dba ","ALL");

/* specific names with special case */
string = Replace(string,"Mcc","McC","ALL");
string = Replace(string,"Mcd","McD","ALL");
string = Replace(string,"Mch","McH","ALL");
string = Replace(string,"Mcg","McG","ALL");
string = Replace(string,"Mci","McI","ALL");
string = Replace(string,"Mck","McK","ALL");
string = Replace(string,"Mcl","McL","ALL");
string = Replace(string,"Mcm","McM","ALL");
string = Replace(string,"Mcn","McN","ALL");
string = Replace(string,"Mcp","McP","ALL");

/* adding punctuation */
string = Replace(string," Inc",", Inc","ALL");
string = Replace(string,"Ft ","Ft. ","ALL");
string = Replace(string,"St ","St. ","ALL");
string = Replace(string,"Mt ","Mt. ","ALL");

/* U.S. state abbreviations */
string = Replace(string, " Ak ", " AK ", " ALL ");
string = Replace(string, " As ", " AS ", " ALL ");
string = Replace(string, " Az ", " AZ ", " ALL ");
string = Replace(string, " Ar ", " AR ", " ALL ");
string = Replace(string, " Ca ", " CA ", " ALL ");
string = Replace(string, " Co ", " CO ", " ALL ");
string = Replace(string, " Ct ", " CT ", " ALL ");
string = Replace(string, " De ", " DE ", " ALL ");
string = Replace(string, " Dc ", " DC ", " ALL ");
string = Replace(string, " Fl ", " FL ", " ALL ");
string = Replace(string, " Ga ", " GA ", " ALL ");
string = Replace(string, " Gu ", " GU ", " ALL ");
string = Replace(string, " Hi ", " HI ", " ALL ");
string = Replace(string, " Id ", " ID ", " ALL ");
string = Replace(string, " Il ", " IL ", " ALL ");
string = Replace(string, " In ", " IN ", " ALL ");
string = Replace(string, " Ia ", " IA ", " ALL ");
string = Replace(string, " Ks ", " KS ", " ALL ");
string = Replace(string, " Ky ", " KY ", " ALL ");
string = Replace(string, " La ", " LA ", " ALL ");
string = Replace(string, " Me ", " ME ", " ALL ");
string = Replace(string, " Md ", " MD ", " ALL ");
string = Replace(string, " Mh ", " MH ", " ALL ");
string = Replace(string, " Ma ", " MA ", " ALL ");
string = Replace(string, " Mi ", " MI ", " ALL ");
string = Replace(string, " Fm ", " FM ", " ALL ");
string = Replace(string, " Mn ", " MN ", " ALL ");
string = Replace(string, " Ms ", " MS ", " ALL ");
string = Replace(string, " Mo ", " MO ", " ALL ");
string = Replace(string, " Mt ", " MT ", " ALL ");
string = Replace(string, " Ne ", " NE ", " ALL ");
string = Replace(string, " Nv ", " NV ", " ALL ");
string = Replace(string, " Nh ", " NH ", " ALL ");
string = Replace(string, " Nj ", " NJ ", " ALL ");
string = Replace(string, " Nm ", " NM ", " ALL ");
string = Replace(string, " Ny ", " NY ", " ALL ");
string = Replace(string, " Nc ", " NC ", " ALL ");
string = Replace(string, " Nd ", " ND ", " ALL ");
string = Replace(string, " Mp ", " MP ", " ALL ");
string = Replace(string, " Oh ", " OH ", " ALL ");
string = Replace(string, " Ok ", " OK ", " ALL ");
string = Replace(string, " Or ", " OR ", " ALL ");
string = Replace(string, " Pw ", " PW ", " ALL ");
string = Replace(string, " Pa ", " PA ", " ALL ");
string = Replace(string, " Pr ", " PR ", " ALL ");
string = Replace(string, " Ri ", " RI ", " ALL ");
string = Replace(string, " Sc ", " SC ", " ALL ");
string = Replace(string, " Sd ", " SD ", " ALL ");
string = Replace(string, " Tn ", " TN ", " ALL ");
string = Replace(string, " Tx ", " TX ", " ALL ");
string = Replace(string, " Ut ", " UT ", " ALL ");
string = Replace(string, " Vt ", " VT ", " ALL ");
string = Replace(string, " Va ", " VA ", " ALL ");
string = Replace(string, " Vi ", " VI ", " ALL ");
string = Replace(string, " Wa ", " WA ", " ALL ");
string = Replace(string, " Wv ", " WV ", " ALL ");
string = Replace(string, " Wi ", " WI ", " ALL ");
string = Replace(string, " Wy ", " WY ", " ALL ");

return string;
}
&lt;/cfscript&gt;
</b></pre>


<?php include_once("../inc.footer.php"); ?>