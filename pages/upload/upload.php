<?php

require_once __DIR__ . '/../../loader.php';
$lab = new Lab();
$lab->printHeader('File Upload with jQuery');


ob_start()
?>
    <div class="filedrag" style="width: 500px;">
        <label class="filedrag-filename"></label>
        <img class="filedrag-preview" src="img/placeholder.gif">
        <div>&nbsp;</div>
        <div class="filedrag-droparea">drop image (or click)</div>
        <div class="filedrag-progress"></div>
        <input type="file" class="filedrag-input" id="file-input" name="file-input">
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<?php
$html = ob_get_clean();
print $html;
?>
    <script src="upload.js<?php
    echo '?' . filectime('upload.js');
    ?>"></script>
    <link rel="stylesheet" type="text/css" href="upload.css<?php
    echo '?' . filectime('upload.css');
    ?>">
    <hr/>
    <h2>HTML</h2>
    <pre><code><?php
            echo htmlentities($html);
    ?></code></pre>
    <h2>JavaScript</h2>
    <pre><code><?php
            echo htmlentities(file_get_contents('upload.js'));
    ?></code></pre>
    <h2>SCSS</h2>
    <pre><code><?php
            echo htmlentities(file_get_contents('upload.scss'));
    ?></code></pre>
    <h2>PHP: accept-input.php</h2>
    <pre><code><?php
            echo highlight_file('accept-input.php', true);
    ?></code></pre>


<?php
$lab->printFooter(
    [
        'comments' => true,
    ]
);