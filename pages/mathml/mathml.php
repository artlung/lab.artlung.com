<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('MathML Test Page');
?>
<h1>MathML Test Page</h1>

<h2>This is an image:</h2>

<div style="border: 3px double #ccc;padding:3ch;">
    <img src="https://cdn.artlung.com/blog/wp-content/uploads/2020/08/The_Problem-500x180-1.png" >
</div>

<hr />

<h2>This is MathML:</h2>

<?php
// start output buffering

ob_start();
?>

<article class="sample">
    Given a sequence of integers A<sub><i>0</i></sub>...A<sub><i>n</i></sub><br /> find i, j such that

    <math xmlns="http://www.w3.org/1998/Math/MathML">
        <mstyle displaystyle="true">
            <munderover>
                <mo>&sum;</mo>
                <mrow>
                    <mi>x</mi>
                    <mo>=</mo>
                    <mi>i</mi>
                </mrow>
                <mi>j</mi>
            </munderover>
        </mstyle>
    </math>

    A<sub><i>x</i></sub> is maximized.
</article><?php
    // end output buffering
    $mathml = ob_get_clean();

    echo $mathml;
?>

<hr />

<h2>Source Code of the MathML</h2>

<pre>
<?php echo htmlentities($mathml); ?>
</pre>


<hr />

From <em><a href="https://artlung.com/blog/2020/08/10/the-problem/" target="_blank">The Problem</a></em>

<hr />

<h2>
    Resources
</h2>
<ul>
    <li>
        <a href="https://developer.mozilla.org/en-US/docs/Web/MathML" target="_blank">MDN Web Docs: MathML</a>
    </li>
</ul>

<style>
    article.sample {
        font-size: 1.8rem;
        padding:3ch;
    }
</style>

<?php
$lab->printFooter([
    'comments' => true
]);
