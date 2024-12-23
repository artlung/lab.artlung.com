<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('Setting Select Box Focus');

?>

    <p class="date-attribution">Created:10/1999; Updated:12/2001</p>

    <h1 class="p-name">Setting Dropdown Focus</h1>

    <p><i><b>Question:</b></i></p>

    <blockquote>
        <p>
            I have a long multiple select box of items that appear on a page. Depending
            on a users settings, one (or more) of those items may be selected when they
            get to the page.
        </p>
        <p>
            What I am trying to do, is focus the list of items so that the first
            selected item is at the top of the select box. As an example, if you have a
            list of 30 items, and only 7 can show at a time, and the 20th item is
            selected, I would like it (#20) to be at the top of the select box, with the
            scroll bar set appropriately on the page.
        </p>
        <p>
            I tried to use <code>document.form.name.option[index].focus()</code> but, <code>focus()</code> is not
            supported... So, any and all suggestions would be appreciated.
    </blockquote>


    <p><i><b>Update 12/2001:</b>Bernd Brandt writes:</i></p>
    <blockquote>
        NS 4.78 on UNIX has different select multiple layout. Also CTRL and SHIFT
        do not work.
        It does not throw an error, but the menu scrollbar simply does not scroll down with the
        selectedIndex. The selection is made, however.
        Also Mozilla (Unix) and NS 6 for UNIX work ok with your script.
        These browser use a select-multiple layout as IE (and CTRL and SHIFT
        work as well).
    </blockquote>


    <hr>

    <p><strong>ANSWER:</strong> focus is the right idea - but for a select box there's an easier way - the <code>selectedIndex</code>
        property of a <code>&lt;SELECT&gt;</code> element.
        Use that instead.</p>

    <p>The links below have <code>onMouseover</code> events which call a function <code>selSELECT()</code> and pass the
        numbers to select which option we want selected.</p>


<?php ob_start(); ?>
    <form action="./" name="myForm">
        <div>
            <a href="javascript:window.open(document.myForm.mySelectBox.options[document.myForm.mySelectBox.selectedIndex].value,'_top')"
               onmouseover="selSELECT(0)">0</a>
            <a href="javascript:window.open(document.myForm.mySelectBox.options[document.myForm.mySelectBox.selectedIndex].value,'_top')"
               onmouseover="selSELECT(1)">1</a>
            <a href="javascript:window.open(document.myForm.mySelectBox.options[document.myForm.mySelectBox.selectedIndex].value,'_top')"
               onmouseover="selSELECT(2)">2</a>
            <a href="javascript:window.open(document.myForm.mySelectBox.options[document.myForm.mySelectBox.selectedIndex].value,'_top')"
               onmouseover="selSELECT(3)">3</a>
            <a href="javascript:window.open(document.myForm.mySelectBox.options[document.myForm.mySelectBox.selectedIndex].value,'_top')"
               onmouseover="selSELECT(4)">4</a>
            <a href="javascript:window.open(document.myForm.mySelectBox.options[document.myForm.mySelectBox.selectedIndex].value,'_top')"
               onmouseover="selSELECT(5)">5</a>
            <a href="javascript:window.open(document.myForm.mySelectBox.options[document.myForm.mySelectBox.selectedIndex].value,'_top')"
               onmouseover="selSELECT(6)">6</a>
            <a href="javascript:window.open(document.myForm.mySelectBox.options[document.myForm.mySelectBox.selectedIndex].value,'_top')"
               onmouseover="selSELECT(7)">7</a>
        </div>
        <select name="mySelectBox" size="8">
            <option value="https://artlung.com">artlung.com</option>
            <option value="https://artlung.com/blog/">artlung.com/blog</option>
            <option value="https://lab.artlung.com">lab.artlung.com</option>
            <option value="https://leahpeah.com/">leahpeah.com</option>
            <option value="https://sandiegoblog.com">sandiegoblog.com</option>
            <option value="https://sandiegobloggers.com/">sandiegobloggers.com</option>
            <option value="https://websandiego.org">websandiego.org</option>
            <option value="https://www.whitehouse.gov">www.whitehouse.gov</option>
        </select>
    </form>
    <style>
        /* styles added 2024 */
        form[name="myForm"] {
            max-width: 500px;
            margin: 1rem auto;
        }

        form[name="myForm"] * {
            box-sizing: border-box;
            font-size: 1rem;
        }

        select[name="mySelectBox"] {
            width: 100%;
        }

        form[name="myForm"] div {
            display: flex;
            justify-content: stretch;
            flex-wrap: wrap;
            background: #000;
            padding: 1px;
            gap: 1px;

        }

        form[name="myForm"] div a {
            padding: 1rem;
            margin: 0;
            display: flex;
            width: 25%;
            background: #fff;
            justify-content: center;
            text-align: center;
            align-items: center;
            flex-grow: 1;
        }

    </style>
    <script language="JavaScript" type="text/javascript">
        function selSELECT(which) {
            document.forms[0].mySelectBox.selectedIndex = which;
        }
    </script>
<?php $html = ob_get_clean(); ?>

<?php
print $html;
?>
    <h2>Source</h2>

    <pre><code><?php echo htmlentities($html) ?></code></pre>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
