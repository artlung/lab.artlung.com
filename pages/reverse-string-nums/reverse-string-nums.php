<?php
require_once '../../loader.php';
$lab = new Lab();
$lab->printHeader(
    '
Reverse a string, but only the digits
'
);

?>
    <p class="date-attribution">2001</p>

    <h1>Reverse a string, but only the digits</h1>

    <h2>Question:</h2>

    <blockquote>

        Any ideas?<br>
        I am trying to set up a way to track applicants that I am working with. What I wanted to do is take the
        persons phone number and reverse it and make
        it the applicant number.<br><br>
        Input: <code>719-964-5776</code><br>
        Output: <code>6775469917</code>

    </blockquote>

    <h2>Answer:</h2>

    <blockquote>
        The code is pretty straightforward - view source on this page to grab a version of the code with proper
        comments:
    </blockquote>









<?php ob_start(); ?>
    <form action="./" class="example" method="post">
        <h2>Enter phone numbers in the space below:</h2>
        <label>
            <b>Input:</b>
            <input type="text" name="_in" value="719-964-5776" onchange="this.form._out.value=reverseNumbersOnly(this.value)">
        </label>
        <label>
            <b>Output:</b>
            <input type="text" name="_out">
        </label>
        <button>process it!</button>
    </form>

    <script type="text/javascript">
        function reverseNumbersOnly(inString) {
            for (i = inString.length - 1; i > -1; i--) {
                if (inString.charAt(i) == parseInt(inString.charAt(i))) {
                    tempVar += inString.charAt(i);
                }
            }
            return tempVar;
        }
    </script>
<?php $script = ob_get_clean(); ?>
<?php
print $script; ?>

    <h2>Source Code</h2>
<?php
$lab->printCodeBlock($script);

$lab->printFooter(
    [
        'comments' => true
    ]
);
