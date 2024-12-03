<?php
require_once __DIR__ . '/../../loader.php';
$lab = new Lab();
$lab->printHeader(
    '
How do I validate a form when the form has an image as submit.
'
);

?>

    <p class="date-attribution">Created: August, 1999; Updated October 2002</p>

    <h1>How do I validate a form when the form has an image as submit?</h1>

    <blockquote>
        <b>Question:</b> I am trying to trigger a javascript form validation function when an image
        submit button is pressed. It works fine in explorer but in netscape, it
        does not work.
        <br><br>

        Does anyone have experience with a similar problem ?
    </blockquote>
    <p style="color: #660000; background-color: #FFFFFF">
        <b>Answer:</b>
        JavaScript does not recognize images as a valid form object,
        unfortunately. So you have to do something which will <strong>require</strong>
        your users to have JavaScript - that is, use an image with a link with the JAVASCRIPT:
        protocol, or a link with an ONCLICK in it.
    </p>
    <table bgcolor="#CCCCCC" border="0" cellspacing="0" cellpadding="20">
        <tr>
            <td align="CENTER">
                <form method="GET" action="../">
                    <p>
                        This form will only submit if you change <strong>dog</strong> to
                        <strong>cat</strong>
                    </p>
                    <input type="text" value="dog" name="bar"/>
                    <br>
                    <a href="javascript:validate_and_submit_Form();"><img
                                src="go.gif" alt="Go" width="100" height="49" border="0"></a>
                </form>
            </td>
        </tr>
    </table>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
