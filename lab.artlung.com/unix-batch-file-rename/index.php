<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
Batch change extension of files on the unix command line
<?php include_once("../inc.header2of2.php"); ?>
<p align="right">Originally created 11/1999; Moved to Lab 12/2001; Updated 07/06/2004</p>

<h1>Batch File Rename By File Extension in Unix</h1>
<h2>These are one-liners which batch rename files meeting a certain criteria under unix</h2>
<p>These are very powerful command line tools. They have been used on FreeBSD, Linux, and MacOSX with success. But as with any batch file changing, you are advised to use them with caution. <b>Backups are your friend!</b></p>


<pre>
<i># change .htm files to .html</i>
<b>for file in *.htm ; do mv $file `echo $file | sed 's/\(.*\.\)htm/\1html/'` ; done</b>

<i># change .html files to .htm</i>
<b>for file in *.html ; do mv $file `echo $file | sed 's/\(.*\.\)html/\1htm/'` ; done</b>

<i>#change .html files to .shtml</i>
<b>for file in *.html ; do mv $file `echo $file | sed 's/\(.*\.\)html/\1shtml/'` ; done</b>

<i>#change .html files to php</i>
<b>for file in *.html ; do mv $file `echo $file | sed 's/\(.*\.\)html/\1php/'` ; done</b>
</pre>

<h2>More Notes</h2>

<p>Visitor <a href="http://www.itoph.com/">Chris Hancock / itoph.com</a> writes in with a question, and answers it himself</p>

<pre>
(Your page) definitely helped me... but I'm still stuck.

I have Mac OS X, and I need to rename a directory with files like:

[itoph:Coda] toph% ls -l
total 59576
-rw-r--r--  1 toph  staff  4140123 Apr 18 09:43 Bonzo's Montruex
-rw-r--r--  1 toph  staff  4914598 Apr 18 09:43 Darlene
-rw-r--r--  1 toph  staff  4131343 Apr 18 09:43 I Can't Quit You Babe
-rw-r--r--  1 toph  staff  2260992 Apr 18 09:43 Ozone Baby
-rw-r--r--  1 toph  staff  2917166 Apr 18 09:43 Poor Tom
-rw-r--r--  1 toph  staff  4331548 Apr 18 09:43 Walter's Walk
-rw-r--r--  1 toph  staff  2521786 Apr 18 09:43 We're Gonna Grove
-rw-r--r--  1 toph  staff  5264433 Apr 18 09:43 Wearing and Tearing

Based on your page I've got this:
[itoph:Coda] toph% more test.sh
for i in * ; do
echo mv \'$i\' \'$i.mp3\'
done

That doesn't work because of the 's in the file names.  If I leave out
the \'s in the shell script the spaces in the file names cause a problem.
</pre>

<p>He then follows up with:

<pre>
I figured it out.  This is the shell script that works:

[itoph:Coda] toph% more t.sh
for i in * ; do
echo mv \"$i\" \"$i.mp3\" | sh
done

It looks a bit weird.  Why wouldn't I just do this:

[itoph:Coda] toph% more t.sh
for i in * ; do
mv \"$i\" \"$i.mp3\"
done

Well, the reason is because it doesn't work.  I get this error:

usage: mv [-fi] source target
       mv [-fi] source ... directory

I don't understand how echoing and piping it to the shell is any
different, but, it works.

Any ideas?
</pre>

<p>To which I reply: Chris, I have no idea. The command line still manages to mystify me utterly. Congrats on finding the solution to your problem so well! Perhaps your insight will help others!
</p>

<p>Reader Michael Dinsmore adds:</p>

<blockquote>
I found your page "https://artlung.com/lab/other/unix-batch-file-rename/" when I searched on "batch rename";  found it useful.
<br><br>
Just as I was getting the hang of it, and looking to make it a tidy
AppleScript, I discovered that Apple already provided many of those
same tools.  At least after the developer tools have been installed;  I'm
not sure if that's required.
<br><br>
Take a look at /Applications/AppleScript/Example Scripts/Finder Scripts.
I found a script that will add extensions and prefixes, as well as one that
will do wildcard renaming.  Very useful!
</blockquote>

<p>My reply: Thanks Mike!</p>

<p>Reader Tony A. Lambley has a solution to fixing the "spaces in names" problem. He writes:</p>

<blockquote>
Regarding the problem mentioned on:

<a href="http://lab.artlung.com/other/unix-batch-file-rename/">http://lab.artlung.com/other/unix-batch-file-rename/</a>

using BASH you can append .mp3 and get rid of those ghastly
embedded spaces with:
<pre>
<b>for e in *; do mv "$e" "`echo $e | sed -e 's/\ /_/g'`.mp3"; done</b>

before:
$ l
Bonzo's Montruex
We're Gonna Grove

after:
$ l
Bonzo's_Montruex.mp3
We're_Gonna_Grove.mp3
</pre>
</blockquote>

<p>And I reply: Thanks so much Tony. Very impressive solution!</p>

<p>Reader Kurt sends this reply about the tool "basename":</p>

<blockquote>
the classic basename(1) tool works very nicely without all
of the sed ugliness:

<pre>
# rename every *.htm file *.html
<b>for f in *htm ; do mv $f `basename $f htm`html; done"</b>
</pre>

Hope you find this helpful.

</blockquote>

<p>Thanks Kurt! Here's a link for <a href="http://www.gnu.org/software/coreutils/manual/html_chapter/coreutils_18.html#SEC110">basename</a> from <a href="http://www.gnu.org/">gnu.org</a>.</p>


<hr />

From "Anonymouse" on June 3, 2005:

<blockquote>

<pre>
[itoph:Coda] toph% more t.sh
for i in * ; do
echo mv \"$i\" \"$i.mp3\" | sh
done
</pre>


<p>
It looks a bit weird.  Why wouldn't I just do this:
</p>

<pre>
[itoph:Coda] toph% more t.sh
for i in * ; do
mv \"$i\" \"$i.mp3\"
done
</pre>

<p>
It's to do with how the shell does its processing before it passes the args to the command.  In the first example, the shell is parses the occurances of <code>\"</code> before giving them to <code>echo</code>, which gives this (which is actually the easy way to do this):
</p>

<pre>
mv "$i" "$i.mp3"
</pre>

which then gets parsed again by the shell for the | sh to finally pass the command these args (where <code>&lt;filename&gt;</code> is the expansion of <code>$i</code>):


<pre>
&lt;filename&gt; &lt;filename&gt;.mp3
</pre>



In the second case, the command gets parsed just once by the shell, which passes these args to the command:


<pre>
"&lt;filename&gt;" "&lt;filename&gt;.mp3"
</pre>


<p>
The command does not discard the quotes - it treats them as part of the filename, and therefore fails.
<br />
<br />
It's easily overlooked, but once you understand how the shell is parsing things before they get to the command (ie, it parses <code>*</code> into a list of files in the current directory), a lot of things will fall into place.
</p>
</blockquote>

<hr />

<a href="http://www.tomkelshaw.com">Tom Kelshaw</a> wrote in April 6, 2009:

<blockquote>
I came across it via Google search for batch renaming files. My requirement was actually to remove garbage/octal chars that had appeared via bad Input file text. Your command suggestions were excellent, but didn't answer my question, whereas after about 4 more hours, this did: <a href="http://lists.xiph.org/pipermail/vorbis/2007-August/026974.html">http://lists.xiph.org/pipermail/vorbis/2007-August/026974.html</a> Potentially you could add a P.S linking to this listserv post about how to remove garbage chars from filenames? Thanks for all your help and a great site,
</blockquote>




<?php include_once("../inc.footer.php"); ?>





