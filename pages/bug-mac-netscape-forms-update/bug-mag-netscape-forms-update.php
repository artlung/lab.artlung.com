<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('Netscape/Macintosh Changing Form Button or Submit Input Value Fails');

?>
<p class="date-attribution">Status: Archaic</p>
    <h1>Netscape/Macintosh Changing Form Button or Submit Input Value Fails</h1>

    <form action="../">
        <p>If you change the value of a <code>&lt;input type="button" value="INPUT
            TYPE BUTTON OR SUBMIT" alt="INPUT TYPE BUTTON OR SUBMIT"&gt;</code> using
            JavaScript - in Mac Netscape 3.04 and 4.x, <strong>the actual
                value will change</strong>, but <strong>the display will not
                update</strong>. The code below is a demonstration of this
            fact.</p>
    </form>

    <p>The code below works ok with Netscape on the Windows side,
        though an input's size will not change dynamically, so adding
        some padding can be helpful to force the button to accommodate
        the text may be necessary.</p>

    <hr>

    <form action="../">
        <input type="BUTTON" value="1"
               onclick="this.value=parseInt(this.value)+1">
        <input type="BUTTON" value="&lt;--Get Value"
               onclick="alert(this.form.elements[0].value)">
    </form>

    <hr noshade>

    <h2>The code:</h2>

    <pre>
&lt;form action="../"&gt;
&lt;input type="BUTTON" value="1"
	<b>onclick="this.value=parseInt(this.value)+1"</b>&gt;
&lt;input type="BUTTON" value="&lt;--Get Value"
	<b>onclick="alert(this.form.elements[0].value)"</b>&gt;
&lt;/form&gt;
</pre>




<?php
$lab->printFooter([
    'comments' => true
]);