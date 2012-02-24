<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
ASP: CDONTS snippet
<?php include_once("../inc.header2of2.php"); ?>

<h1>ASP: CDONTS snippet</h1> 

<p>I forget why I kept this, but I run into this problem every now and again -- that of having to send mail with a site that runs ASP. I'm sure this code helped me in the past, if only I could remember how.</p>

<pre><b>
Set newMsg = CreateObject("CDO.Message")
newMsg.From = Dlookup("settings","notify_new_from","settings_id=1")
newMsg.To = Dlookup("users","email","user_id=" & fldassigned_to)
newMsg.Subject = mailSubject
newMsg.HTMLbody = mailBody
newMsg.Configuration.Fields.Item("http://schemas.microsoft.com/cdo/configuration/sendusing") = 2
newMsg.Configuration.Fields.Item("http://schemas.microsoft.com/cdo/configuration/smtpserver") = "10.4.0.110"
newMsg.Configuration.Fields.Item("http://schemas.microsoft.com/cdo/configuration/smtpserverport") = 25
newMsg.Configuration.Fields.Update
newMsg.Send
set newMsg=Nothing
</b></pre>


<?php include_once("../inc.footer.php"); ?>