<?php
require_once __DIR__ . '/../../loader.php';
$lab = new Lab();
$lab->printHeader('CSS3 Smiley - in colors!');

?>


    <p class="date-attribution">Created September 2010. jQuery removed, replaced with vanilla JS 2024.</p>

    <h1>CSS3 Smiley</h1>

<?php ob_start(); ?>
    <div id="smiley-wrapper" class="figure">
        <div class="smiley ground">
            <div class="left-eye eye figure">&nbsp;</div>
            <div class="right-eye eye figure">&nbsp;</div>
            <div class="mouth figure">&nbsp;</div>
            <div class="mouth-cover ground">&nbsp;</div>
        </div>
    </div>

    <div id="controls">
        <div class="segment">
            <h2>Figure <code id="figureText"></code></h2>
            <div class="r">
                <label><input type="radio" value="0" name="fr" checked> 0</label>
                <label><input type="radio" value="3" name="fr"> 3</label>
                <label><input type="radio" value="6" name="fr"> 6</label>
                <label><input type="radio" value="9" name="fr"> 9</label>
                <label><input type="radio" value="C" name="fr"> C</label>
                <label><input type="radio" value="F" name="fr"> F</label>
            </div>
            <div class="g">
                <label><input type="radio" value="0" name="fg" checked> 0</label>
                <label><input type="radio" value="3" name="fg"> 3</label>
                <label><input type="radio" value="6" name="fg"> 6</label>
                <label><input type="radio" value="9" name="fg"> 9</label>
                <label><input type="radio" value="C" name="fg"> C</label>
                <label><input type="radio" value="F" name="fg"> F</label>
            </div>
            <div class="b">
                <label><input type="radio" value="0" name="bg" checked> 0</label>
                <label><input type="radio" value="3" name="bg"> 3</label>
                <label><input type="radio" value="6" name="bg"> 6</label>
                <label><input type="radio" value="9" name="bg"> 9</label>
                <label><input type="radio" value="C" name="bg"> C</label>
                <label><input type="radio" value="F" name="bg"> F</label>
            </div>
        </div>
        <div class="segment">
            <h2>Ground <code id="groundText"></code></h2>
            <div class="r">
                <label><input type="radio" value="0" name="gr"> 0</label>
                <label><input type="radio" value="3" name="gr"> 3</label>
                <label><input type="radio" value="6" name="gr"> 6</label>
                <label><input type="radio" value="9" name="gr"> 9</label>
                <label><input type="radio" value="C" name="gr"> C</label>
                <label><input type="radio" value="F" name="gr" checked> F</label>
            </div>
            <div class="g">
                <label><input type="radio" value="0" name="gg"> 0</label>
                <label><input type="radio" value="3" name="gg"> 3</label>
                <label><input type="radio" value="6" name="gg"> 6</label>
                <label><input type="radio" value="9" name="gg"> 9</label>
                <label><input type="radio" value="C" name="gg"> C</label>
                <label><input type="radio" value="F" name="gg" checked> F</label>
            </div>
            <div class="b">
                <label><input type="radio" value="0" name="gb"> 0</label>
                <label><input type="radio" value="3" name="gb"> 3</label>
                <label><input type="radio" value="6" name="gb"> 6</label>
                <label><input type="radio" value="9" name="gb"> 9</label>
                <label><input type="radio" value="C" name="gb"> C</label>
                <label><input type="radio" value="F" name="gb" checked> F</label>
            </div>
        </div>
    </div>
<?php $html = ob_get_clean(); ?>
<?php print $html; ?>


    <h2>HTML</h2>

<?php $lab->printSource($html) ?>

    <link rel="stylesheet" href="css3-smiley.css<?php
    print "?" . filectime('css3-smiley.css');
    ?>" type="text/css"/>
    <script src="css3-smiley.js<?php
    print '?' . filectime('css3-smiley.js');
    ?>" type="text/javascript"></script>

    <h2>SCSS</h2>
<?php $lab->printSourceFile('css3-smiley.scss'); ?>

    <h2>JavaScript</h2>
<?php $lab->printSourceFile('css3-smiley.js'); ?>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);