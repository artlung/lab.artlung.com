<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('





Form action mailto: stinks


');

?>
<p class="date-attribution">Started August 2001; Last Update January 2003</p>

<h1>Form action mailto: stinks</h1>

<p>
Budding web developers love to get feedback on their sites.
Budding web developers also love to use forms.
The problem comes because most free or cheap hosts don't have much in the way of CGI or server-side programming. So how to use a proper feedback form? In many web-dev books they advise these folks to use the action type of "mailto" in a form action. This is a bad idea. Why? Browsers choke on it in a way other form actions don't choke. If no email client is set up, it can choke. They all seem to throw up a more-threatening-than-usual error message as well. Below are some examples of the draconian error messages:
</p>


<p>windows-ie-5<br><img src="email-submission-win-ie-5.gif" alt="email-submission-win-ie-5.gif"></p>
<p>windows-ns-6<br><img src="email-submission-win-ns-6.gif" alt="email-submission-win-ns-6.gif"></p>
<p>windows-ns-4<br><img src="email-submission-win-ns-4.gif" alt="email-submission-win-ns-4.gif"></p>
<p>windows-ns-3<br><img src="email-submission-win-ns-3.gif" alt="email-submission-win-ns-3.gif"></p>
<p>windows-opera-5<br><img src="email-submission-win-opera-5.gif" alt="email-submission-win-opera-5.gif"></p>
<p>macos-ie-5<br><img src="email-submission-mac-ie-5.gif" alt="email-submission-mac-ie-5.gif"></p>
<p>macos-ns-4<br><img src="email-submission-mac-ns-4.gif" alt="email-submission-mac-ns-4.gif"></p>
<p>macos-icab-252<br><img src="email-submission-mac-icab-252.gif" alt="email-submission-mac-icab-252.gif"></p>
<p>webtv-viewer20-webtv-client-rom-2.2<br><img src="email-submission-webtv-viewer20-webtv-client-rom-2.2.gif" alt="email-submission-webtv-viewer20-webtv-client-rom-2.2.gif"></p>
<p>osx-icab<br><img src="email-submission-osx-icab.gif" alt="email-submission-osx-icab.gif"></p>
<p>osx-msie5.1<br><img src="email-submission-osx-msie5.1.gif" alt="email-submission-osx-msie5.1.gif"></p>
<p>osx-opera-5<br><img src="email-submission-osx-opera-5.gif" alt="email-submission-osx-opera-5.gif"></p>
<p>osx-safari-1-beta, osx-chimera-navigator-0.6<br><img src="email-submission-osx-safari-1-beta.gif" alt="email-submission-osx-safari-1-beta.gif"><br>Note: Both Safari and Chimera open up emails in Mail.app with the destination address your form indicates. There is no guarantee that the user's information will be sent.</p>
<p>osx-mozilla-1.1<br><img src="email-submission-osx-mozilla-1.1.gif" alt="email-submission-osx-mozilla-1.1.gif"></p>




<br><br>

<p>This is an example mailto action form below:</p>
<form method="post" action="mailto:recipient@fake.dom" enctype="text/plain">
<input type="text" name="your_comments">
<input type="submit" value="Submit Your Comments">
</form>

<p>The code for that:</p>

<pre>&lt;form method=&quot;post&quot; action=&quot;mailto:recipient@fake.dom&quot; enctype=&quot;text/plain&quot;&gt;
&lt;input type=text name=your_comments&gt;
&lt;input type=submit value=&quot;Submit Your Comments&quot;&gt;
&lt;/form&gt;</pre>

<?php
$lab->printFooter([
	'comments' => true
]);
