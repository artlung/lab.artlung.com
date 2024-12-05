<?php
require_once __DIR__ . '/../../loader.php';
$lab = new Lab();
$lab->printHeader('Changing the color of a form element when it\'s blank');

?>
    <p class="date-attribution">Originally written 8/12/2000 for MSIE 4; Updated October 2002 for
        Mozilla/Netscape/MSIE/Opera</p>

    <h1>Changing the color of a form element when it's blank</h1>

    <p>The idea is that you give the user feedback when they're missing something</p>

    <form action="../">
<textarea rows="4" cols="40"
          onclick="checkPink(this)"
          onfocus="checkPink(this)"
          onblur="checkPink(this)"
          onchange="checkPink(this)">Delete this copy to make this pink</textarea>
        <input size="30"
               onclick="checkPink(this)"
               onfocus="checkPink(this)"
               onblur="checkPink(this)"
               onchange="checkPink(this)"
               value="Delete this copy to make this pink">
    </form>


    <hr noshade>

    <h2>HTML Source Code</h2>

    &lt;form action="../"&gt;
    &lt;textarea rows="4" cols="40"
    <b>onclick="checkPink(this)"</b>
    <b>onfocus="checkPink(this)"</b>
    <b>onblur="checkPink(this)"</b>
    <b>onchange="checkPink(this)"</b>&gt;Delete this copy to make this pink&lt;/textarea&gt;
    &lt;input size="30"
    <b>onclick="checkPink(this)"</b>
    <b>onfocus="checkPink(this)"</b>
    <b>onblur="checkPink(this)"</b>
    <b>onchange="checkPink(this)"</b>
    value="Delete this copy to make this pink"&gt;
    &lt;/form&gt;
    </pre>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
