<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('ASP: CDONTS snippet');

?>


    <p class="date-attribution">
        Status: Archaic. Updated 2005.
    </p>
    <h1 class="p-name">ASP: CDONTS snippet</h1>

    <p>I forget why I kept this, but I run into this problem every now and again -- that of having to send mail with a
        site that runs ASP. I'm sure this code helped me in the past, if only I could remember how.</p>

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

    <p>I got a comment, before I had comments, in April 2005, from a visitor named Rich:</p>

    <blockquote><i>

            You say that you don't remember why you keep that script

            around. It looks to be an Access Function using the

            intrinsic DLookup (Domain Lookup). I don't think that you

            can use this "as-is" on a site. But rather within an

            Access File, or at the minimum a reference to the Access

            Library.


            <br/><br/>
            Looks that way to me anyways.

            <br/><br/>


            Again, Great site!

        </i></blockquote>


<?php
$lab->printFooter();
