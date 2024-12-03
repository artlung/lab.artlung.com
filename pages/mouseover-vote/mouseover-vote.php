<?php
require_once __DIR__ . '/../../loader.php';
$lab = new Lab();
$lab->printHeader(
    '
Mouseover Vote Thing JavaScript
'
);

?>
    <p class="date-attribution">Created in 1999</p>
    <h1>Mouseover Vote Thing JavaScript</h1>

    <p>This is a nifty little thing to make it easy to let people vote on something with values 1 to 10.</p>


    <table border="0" width="100%" cellspacing="0" cellpadding="0" height="200">
        <tr>
            <td></td>
        </tr>
        <tr>
            <td>
                <p align="center"><b>
                        {
                        <a href="#" onmouseover="updateVote(1)" onclick="updateVote(1);return false;">1</a> |
                        <a href="#" onmouseover="updateVote(2)" onclick="updateVote(2);return false;">2</a> |
                        <a href="#" onmouseover="updateVote(3)" onclick="updateVote(3);return false;">3</a> |
                        <a href="#" onmouseover="updateVote(4)" onclick="updateVote(4);return false;">4</a> |
                        <a href="#" onmouseover="updateVote(5)" onclick="updateVote(5);return false;">5</a> |
                        <a href="#" onmouseover="updateVote(6)" onclick="updateVote(6);return false;">6</a> |
                        <a href="#" onmouseover="updateVote(7)" onclick="updateVote(7);return false;">7</a> |
                        <a href="#" onmouseover="updateVote(8)" onclick="updateVote(8);return false;">8</a> |
                        <a href="#" onmouseover="updateVote(9)" onclick="updateVote(9);return false;">9</a> |
                        <a href="#" onmouseover="updateVote(10)" onclick="updateVote(10);return false;">10</a>
                        }
                    </b></p>

                <form action="../" name="theFormName">
                    <div align="center"><input type="text" size="2" name="Vote"></div>
                </form>

            </td>
        </tr>
    </table>

    <h2>HTML Source</h2>
    <pre>
&lt;p align="center"&gt;&lt;b&gt;
{
&lt;a href="#" <b>onmouseover="updateVote(1)"  onclick="updateVote(1);return false;"</b>&gt;1&lt;/a&gt; |
&lt;a href="#" <b>onmouseover="updateVote(2)"  onclick="updateVote(2);return false;"</b>&gt;2&lt;/a&gt; |
&lt;a href="#" <b>onmouseover="updateVote(3)"  onclick="updateVote(3);return false;"</b>&gt;3&lt;/a&gt; |
&lt;a href="#" <b>onmouseover="updateVote(4)"  onclick="updateVote(4);return false;"</b>&gt;4&lt;/a&gt; |
&lt;a href="#" <b>onmouseover="updateVote(5)"  onclick="updateVote(5);return false;"</b>&gt;5&lt;/a&gt; |
&lt;a href="#" <b>onmouseover="updateVote(6)"  onclick="updateVote(6);return false;"</b>&gt;6&lt;/a&gt; |
&lt;a href="#" <b>onmouseover="updateVote(7)"  onclick="updateVote(7);return false;"</b>&gt;7&lt;/a&gt; |
&lt;a href="#" <b>onmouseover="updateVote(8)"  onclick="updateVote(8);return false;"</b>&gt;8&lt;/a&gt; |
&lt;a href="#" <b>onmouseover="updateVote(9)"  onclick="updateVote(9);return false;"</b>&gt;9&lt;/a&gt; |
&lt;a href="#" <b>onmouseover="updateVote(10)" onclick="updateVote(10);return false;"</b>&gt;10&lt;/a&gt;
}
&lt;/b&gt;&lt;/p&gt;

&lt;form action="../" <b>name="theFormName"</b>&gt;
    &lt;div align="center"&gt;&lt;input type="text" size="2" <b>name="Vote"</b>&gt;&lt;/div&gt;
&lt;/form&gt;
</pre>

    <p><b>See also:</b> <a href="/mouseover-vote100/">Mouseover Vote Thing x 100</a></p>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
