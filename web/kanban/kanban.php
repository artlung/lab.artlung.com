<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader(
    'Kanban Task Board in CSS Grid'
);

?>
<link rel="stylesheet" href="kanban.css<?php
    echo '?' . filemtime('kanban.css');
    ?>" type="text/css"/>


<p class="date-attribution">Created Jun 2025</p>
<h1 class="p-name">Kanban Task Board in CSS Grid</h1>

<p>Demonstration of <code>display: grid</code> coupled with 	<code>grid-auto-flow: column;</code></p>

<p>How does this work?</p>
<ul>
    <li>If the screen has a minimum width of <code>800px</code>...</li>
    <li>3 columns are set up using CSS Grid.</li>
    <li>Each div includes a set of radio buttons with a <code>name</code> unique to each div</li>
    <li>Based on which one is <code>:checked</code>, a <code>:has()</code> selector sets the <code>grid-column:</code> property</code></li>
    <li>...result: each div is placed in the appropriate column based on the radio button selection.</li>
    <li><code>grid-auto-flow: column;</code> causes each <code>div</code> to flow to the topmost available position on the grid.</li>
    <li>When the available screen is narrower than 800px, there's one column of items, but colors are still set for the element based on checkbox state.</li>
    <li>No JavaScript in this demo</li>
</ul>
    <p><em>See also <a href="../kanban-2/">Kanban Task Board in CSS Grid (Part 2)</a></em></p>


<?php ob_start(); ?>
    <main class="task-board">
        <h2 class="on-deck">On Deck</h2>
        <h2 class="in-progress">In Progress</h2>
        <h2 class="done">Done</h2>
        <div>
            One
            <form>
                <label><input type="radio" name="task-1" value="on-deck" checked>On Deck</label>
                <label><input type="radio" name="task-1" value="in-progress">In Progress</label>
                <label><input type="radio" name="task-1" value="done">Done</label>
            </form>
        </div>
        <div>
            Two
            <form>
                <label><input type="radio" name="task-2" value="on-deck" checked>On Deck</label>
                <label><input type="radio" name="task-2" value="in-progress">In Progress</label>
                <label><input type="radio" name="task-2" value="done">Done</label>
            </form>
        </div>
        <div>
            Three
            <form>
                <label><input type="radio" name="task-3" value="on-deck" checked>On Deck</label>
                <label><input type="radio" name="task-3" value="in-progress">In Progress</label>
                <label><input type="radio" name="task-3" value="done">Done</label>
            </form>
        </div>
        <div>
            Four
            <form>
                <label><input type="radio" name="task-4" value="on-deck" checked>On Deck</label>
                <label><input type="radio" name="task-4" value="in-progress">In Progress</label>
                <label><input type="radio" name="task-4" value="done">Done</label>
            </form>
        </div>
        <div>
            Five
            <form>
                <label><input type="radio" name="task-5" value="on-deck" checked>On Deck</label>
                <label><input type="radio" name="task-5" value="in-progress">In Progress</label>
                <label><input type="radio" name="task-5" value="done">Done</label>
            </form>
        </div>
        <div>
            Six
            <form>
                <label><input type="radio" name="task-6" value="on-deck" checked>On Deck</label>
                <label><input type="radio" name="task-6" value="in-progress">In Progress</label>
                <label><input type="radio" name="task-6" value="done">Done</label>
            </form>
        </div>
        <div>
            Seven
            <form>
                <label><input type="radio" name="task-7" value="on-deck" checked>On Deck</label>
                <label><input type="radio" name="task-7" value="in-progress">In Progress</label>
                <label><input type="radio" name="task-7" value="done">Done</label>
            </form>
        </div>
        <div>
            Eight
            <form>
                <label><input type="radio" name="task-8" value="on-deck" checked>On Deck</label>
                <label><input type="radio" name="task-8" value="in-progress">In Progress</label>
                <label><input type="radio" name="task-8" value="done">Done</label>
            </form>
        </div>
        <div>
            Nine
            <form>
                <label><input type="radio" name="task-9" value="on-deck" checked>On Deck</label>
                <label><input type="radio" name="task-9" value="in-progress">In Progress</label>
                <label><input type="radio" name="task-9" value="done">Done</label>
            </form>
        </div>
        <div>
            Ten
            <form>
                <label><input type="radio" name="task-10" value="on-deck" checked>On Deck</label>
                <label><input type="radio" name="task-10" value="in-progress">In Progress</label>
                <label><input type="radio" name="task-10" value="done">Done</label>
            </form>
        </div>
    </main>
<?php $html = ob_get_clean(); ?>
<?php print $html; ?>

<hr>

<h2>HTML</h2>

<?php $lab->printCodeBlock($html); ?>

<h2>SCSS</h2>

<?php $lab->printCodeBlock(
    file_get_contents('kanban.scss')
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
