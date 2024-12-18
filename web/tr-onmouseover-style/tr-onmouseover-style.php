<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader(
    '
onmouseover in a TR tag
'
);

?>



<p class="date-attribution">1999</p>
    <h1>onMouseover in a TR tag</h1>

<p>
    Don't use this technique.
</p>

<?php ob_start(); ?>
    <table cellspacing="0" cellpadding="3" border="1">
        <tr onmouseover="this.className='yellowThing';"
            onmouseout="this.className='whiteThing';">
            <td>hello</td>
            <td>world</td>
        </tr>
        <tr onmouseover="this.className='yellowThing';"
            onmouseout="this.className='whiteThing';">
            <td>hola</td>
            <td>mundo</td>
        </tr>
        <tr onmouseover="this.className='yellowThing';"
            onmouseout="this.className='whiteThing';">
            <td>hello</td>
            <td>hello</td>
        </tr>
        <tr onmouseover="this.style.background='#F00';"
            onmouseout="this.style.background='#FFF';">
            <td>hola</td>
            <td>mundo</td>
        </tr>
        <tr onmouseover="alert('hello onmouseover');"
            class="pinkThing">
            <td>the tr for this row has</td>
            <td>an onmouseover <code>alert()</code></td>
        </tr>
    </table>

    <style type="text/css">
        .yellowThing {
            background: #FF9;
        }

        .whiteThing {
            background: #FFF;
        }

        .pinkThing {
            background: pink;
        }

    </style>
<?php $html = ob_get_clean(); ?>
<?php echo $html; ?>
<h2>HTML & JavaScript</h2>

<pre><code class="html"><?php echo htmlentities($html); ?></code></pre>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
