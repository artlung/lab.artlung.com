<?php

require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('Spoiler Widget');
?>

<p class="date-attribution">Created October 2024 at <a href="https://indieweb.org/events/2024-10-10-front-end-study-hall">FrESH #013</a></p>
<h1>Spoiler Widget</h1>

<div style="max-width: 80ch">
    <p>
        Sometimes you want to share something on a web page that is a <em>spoiler</em>.
        To do that you would Some sites will include the text in a way that it is hidden until you click on it.
    </p>


    <h2>Here's an example:</h2>
<hr >
    <blockquote>

        <?php ob_start(); ?>
<p>
  This was an interesting farce that relied on ridiculous robot logic,
  in a good way. I'm not sure how I feel about it but don't regret
  having read it. I wasn't sure where the story was going but liked
  how it finished. Kafka was the main vibe I got throughout, though
  I'm not familiar with Borges. A bit heavy-handed at times, and
  <label class="spoiler">
      <input type="checkbox">the MC's continued willingness to go
      along with being dismantled long into the book was aggravating.
  </label>
</p><?php
        $html = ob_get_clean();
        echo $html;
?></blockquote>
    <hr >

    <h2>How does this work?</h2>

    <p>This works because of several different parts of HTML and CSS that are in common usage</p>

    <ul>
        <li><code>label</code> elements surrounding an <code>input</code> with <code>type</code> of <code>checkbox</code> can check and uncheck them.</li>
        <li>CSS now has the <code>:has()</code> selector which can read whether a checkbox is on or off, and apply a style based on that.
        </li>
        <li>
            CSS has the <code>filter:</code> property which can blur text.
        </li>

    </ul>
    <p>
        It's pretty great that this works without JavaScript, and without requiring a <code>name</code> or <code>id</code> attribute.
    </p>


    <h2>HTML</h2>

<pre><code><?php echo htmlentities($html) ?></code></pre>

<h2>CSS</h2>

        <pre><code><?php echo htmlentities(file_get_contents('spoiler.scss')) ?></code></pre>

    </blockquote>
</div>

<h2><s>JavaScript</s></h2>

<p>There's no JavaScript required for this to work, just HTML and CSS.</p>


<h2>Suggestions? Questions?</h2>
<p>
        If you have an idea for a variation of this, perhaps to have multiple on a page that you'd want to display all at once, JavaScript might be required. If you have an idea please leave a comment or a webmention.


    </p>


<?php
$lab->printFooter(
    [
    'comments' => true
    ]
);



