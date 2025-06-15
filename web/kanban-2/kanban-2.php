<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader(
    'Kanban Task Board in CSS Grid (Part 2)'
);

?>
<link rel="stylesheet" href="kanban-2.css<?php
    echo '?' . filemtime('kanban-2.css');
?>" type="text/css"/>


<p class="date-attribution">Created Jun 2025</p>
<h1 class="p-name">Kanban Task Board in CSS Grid (Part 2)</h1>

<p><em>Based on <a href="../kanban/">Kanban Task Board in CSS Grid</a></em></p>

<p>...but with a dynamic set of states and columns.</p>

<ul>
    <li>A PHP array contains the names and values</li>
    <li>Uses a <code>select</code> element to take less space (thanks <a href="https://mariusgundersen.net/">
        Marius Gundersen</a> for the suggestion)</li>
    <li><code>:checked</code> for inputs to store state can cover either a hidden input or an option with the value</li>
    <li>A SASS map contains the names and colors</li>
    <li>SASS functions generate the selectors to generate the <code>:has()</code> conditions</li>
    <li>Specific accessibility accommodations during state changes are <em>not</em> in this demo at this time. Moving elements on user change while that element is focused constitutes a potential usability and accessibility issue.</li>
    <li>Still no JavaScript, but to store to the backend one would need to add some form actions</li>
</ul>

<?php require __DIR__ . '/kanban-2-main.php'; ?>

<hr>

<h2>HTML</h2>

<pre><?php highlight_file(
    __DIR__ . '/kanban-2-main.php'
);?></pre>

<h2>SCSS</h2>

<?php $lab->printCodeBlock(
    file_get_contents(__DIR__ . '/kanban-2.scss')
); ?>

<hr>

<h2>Shoutout</h2>
<p>...to <a href="https://turner.enemyterritory.org/user/carrvo/index">carrvo</a> over on the <a href="https://indieweb.org/">indieweb</a> for inspiring my investigation of this layout.</p>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
