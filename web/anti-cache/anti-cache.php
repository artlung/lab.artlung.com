<?php
header('Cache-Control: no-cache');
header('Pragma: no-cache');
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('Preventing Browser Cache');
?>

    <p class="date-attribution">Created 12/2001</p>
    <h1 class="p-name">Preventing Browser Cache</h1>

    <h2>Multiple Platform Solutions</h2>
    <p>
        Bill Volk wrote on the WebSanDiego mailing list:<br>
        &gt; On a similar subject ... what's the best way to force a Browser to do a<br>
        &gt; refresh on a page when the user uses the "Back Arrow" to get to it? I need<br>
        &gt; to referesh the session objects.
    </p>

    <p>
        This is a persistent problem, particularly with sites whose content updates frequently.
        The most common answer I see answering this question is to use &lt;meta&gt; tags
        in the &lt;head&gt; of the document.</p>
    <pre><b>
&lt;meta http-equiv="Expires" content="Tue, 01 Jan 2000 12:12:12 GMT"&gt;
&lt;meta http-equiv="Pragma" content="no-cache"&gt;</b></pre>
    <p>...although this works inconsistently or not at all in Internet Explorer.</p>

    <p>The way to do it according to the HTTP spec (<a href="http://www.faqs.org/rfcs/rfc2187.html">RFC 2187</a>)
        is to generate raw HTTP headers. Below are some different code snippets for some different server-side
        languages.</p>

    <pre>
In ASP/IIS:
  <a href="http://support.microsoft.com/support/kb/articles/Q234/0/67.asp">http://support.microsoft.com/support/kb/articles/Q234/0/67.asp</a>
<b>  &lt;% Response.CacheControl = "no-cache" %&gt;
  &lt;% Response.AddHeader "Pragma", "no-cache" %&gt;
  &lt;% Response.Expires = -1 %&gt;</B>

In PHP:
  <a href="http://www.php.net/manual/en/function.header.php">http://www.php.net/manual/en/function.header.php</a>
<b>  &lt;?
  Header('Cache-Control: no-cache');
  Header('Pragma: no-cache');
  ?&gt;</b>

In COLD FUSION:
<b>  &lt;cfheader name="Expires" value="#Now()#"&gt;
  &lt;cfheader name="Pragma" value="no-cache"&gt;</b>

In JSP:
  <a href="http://www.jguru.com/faq/view.jsp?EID=377&amp;page=2">http://www.jguru.com/faq/view.jsp?EID=377&amp;page=2</a>
  <b>&lt;%
  response.setHeader("Cache-Control","no-cache");
  response.setHeader("Pragma","no-cache");
  response.setDateHeader ("Expires", 0);
  %&gt;</b>
</pre>


    <pre>If you want to view the raw headers of
your web page - you can use this service:
<a href="http://www.delorie.com/web/headers.html">http://www.delorie.com/web/headers.html</a>

Sample HTTP Headers: (for this page)
<b>HTTP/1.1 200 OK
Date: Tue, 29 Oct 2002 19:50:44 GMT
Server: Apache/1.3.27
X-Powered-By: PHP/4.2.2
Cache-Control: no-cache
Pragma: no-cache
Connection: close
Content-Type: text/html
</b>
</pre>


<?php
$lab->printFooter();
