<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
Miscellaneous Web Files
<?php include_once("../inc.header2of2.php"); ?>

<p align="right">Created 19 December 2002</p>

<h1>Miscellaneous Web Files</h1>

<p>One of the things about web development is the number of pieces of arcana one picks up.
These things are a bit like trivia, and a bit like core knowledge. Here are some common files
you may have heard of, but perhaps you never quite knew what they were.</p>


<dl>
	<dt>favicon.ico</dt>
		<dd>	.ico is the windows icon file format. favicon.ico is the file requested by windows internet explorer for bookmarked sites. <a href="http://www.google.com/search?q=favicon.ico">Find more articles with  Google</a></dd>
	<dt>robots.txt</dt>
		<dd>	this is a simple text file that sits at the root of a web server, and may tell friendly robots which parts of the site may or may not be crawled based on certain conditions -- url, user agent, etc.; if you don't want your site or part of your site in search engines, learn more about this. <a href="http://www.google.com/search?q=robots.txt">Find more articles with  Google</a></dd>
	<dt>.htaccess</dt>
		<dd>	on systems with apache as a webserver, an .htaccess files is a means to give the web server extra instructions on how to handle what is in a certain directory, and below. this may include password authentication, mod_rewrite, default index, etc. depending on your system configuration, all, some, or none of the standard apache syntax will work. consult your system administrator for more information. <a href="http://www.google.com/search?q=.htaccess">Find more articles with  Google</a></dd>
	<dt>application.cfm</dt>
		<dd>	on sites with coldfusion application server, this is the "default included" file. that is, in a directory containing an application.cfm file, all cold fusion processed files will include and process this file by default. <a href="http://www.google.com/search?q=application.cfm">Find more articles with  Google</a></dd>
	<dt>global.asa</dt>
		<dd>	on sites serving active server pages (ASP) this is the "default included" file. that is, in a directory containing an global.asa file, all ASP processed files will include and process this file by default. <a href="http://www.google.com/search?q=global.asa">Find more articles with  Google</a></dd>
	<dt>cgi-bin</dt>
		<dd>in some web hosting environments, server-side processing is limited to a certain directory, and that directory is often named "cgi-bin." CGI stands for "common gateway interface" - a reference to the earliest way that pages were made dynamic. "bin," however, is a unix term meaning "binaries" - programs that can be run. So a program in the cgi-bin directory is likely to be a small program that can be run on the web. Server processed languages such as ASP and ColdFusion and PHP are evolutionary steps up from cgi programs. <a href="http://www.google.com/search?q=cgi-bin+directory">Find more articles with  Google</a>
</dl>
    
                                                                                     
<?php include_once("../inc.footer.php"); ?>                                                                                     
                                                                              
 