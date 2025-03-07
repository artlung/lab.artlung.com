<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('MathML Test Page');
?>
    <p class="date-attribution">July 2024. Updated February 2025.</p>
    <h1 class="p-name">MathML Test Page <em>now with MathJax / LaTeX</em></h1>


    <p>
        I first got curious to experiment with MathML during an <a
                href="https://indieweb.org/events/2024-07-03-hwc-europe">HWC Europe</a> meeting.</p.
    </p>

    <p>
        This test is based on <em><a href="https://artlung.com/blog/2020/08/10/the-problem/" target="_blank">The
                Problem</a></em>, an interview question we used at a former employer.
    </p>

    <h2>This is an image:</h2>

    <div style="border: 3px double #ccc;padding:3ch;">
        <img src="https://cdn.artlung.com/blog/wp-content/uploads/2020/08/The_Problem-500x180-1.png" alt=""
             style="max-width:100%;height:auto;"/>

    </div>

    <hr/>

    <h2>This is MathML:</h2>

<?php
// start output buffering

ob_start();
?>

    <article class="sample">
        Given a sequence of integers
        <math>
            <mrow>
                <msub>
                    <mi>A</mi>
                    <mn>0</mn>
                </msub>
                <mo>...</mo>
                <msub>
                    <mi>A</mi>
                    <mi>n</mi>
                </msub>
            </mrow>
        </math>
        <br/> find i, j such that

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

    <hr/>

    <h2>Source Code of the MathML</h2>

    <pre>
<?php echo htmlentities($mathml); ?>
</pre>


<hr />

<h2>Using MathJax</h2>

<p>
    Thanks to the participants of <a href="https://indieweb.org/events/2025-02-25-front-end-study-hall">Front End Study Hall #022</a>
    for helping clarify the uses of MathML, LaTeX
</p>


<?php ob_start(); ?>
<article class="sample">
  Given a sequence of integers
    <span style="display: inline-block;">$$ A_{0} \dots A_{n} $$</span>
  <br/>
  find i, j such that <span style="display: inline-block;">$$  \sum^{j}_{x=1} A_{x} $$</span>
  is maximized.
</article>

<script type="text/javascript" id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-svg.js">
  MathJax.Hub.Config({
    tex2jax: {
      displayMath: [['$$', '$$'], ['\\[', '\\]']],
      processEscapes: true
    }
  });
</script>
<?php $mathjax = ob_get_clean(); ?>

<?php
print $mathjax;
?>

<h2>MathJax Source Code</h2>
<?php
$lab->displayCode($mathjax);
?>



    <hr/>

    <h2>
        Resources
    </h2>
    <ul>
        <li>
            <a href="https://developer.mozilla.org/en-US/docs/Web/MathML" target="_blank">MDN Web Docs: MathML</a>
            <a href="https://www.mathjax.org" target="_blank">MathJax</a>
        </li>
    </ul>

    <style>
        article.sample {
            font-size: 1.8rem;
            padding: 3ch;
        }
    </style>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
