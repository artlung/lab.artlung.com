<?php require_once __DIR__ . '/../../loader.php'; ?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Rudy's background colour picker (1997, 2025)</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rudysbg.css<?php
    echo '?v=' . filemtime('rudysbg.css');
    ?>">
    <script src="../2025.js<?php
    echo '?' . filemtime('../2025.js');
    ?>"></script>
    <link rel="webmention" href="https://webmention.io/artlung.com/webmention">
</head>
<body>
    <h1 class="p-name">Rudy's background colour picker (2025) <em>for rudy who taught me so much</em></h1>

    <?php ob_start(); ?>
    <main>
        <!-- white             --><label style="--bgcolor:#ffffff"><input type=radio name=whups value='#ffffff' checked><tt>ffffff</tt> white</label>
        <!-- azure             --><label style="--bgcolor:#f0ffff"><input type=radio name=whups value='#f0ffff'><tt>f0ffff</tt> azure</label>
        <!-- light cyan        --><label style="--bgcolor:#e0ffff"><input type=radio name=whups value='#e0ffff'><tt>e0ffff</tt> light cyan</label>
        <!-- mint cream        --><label style="--bgcolor:#f5fffa"><input type=radio name=whups value='#f5fffa'><tt>f5fffa</tt> mint cream</label>
        <!-- ghost white       --><label style="--bgcolor:#f8f8ff"><input type=radio name=whups value='#f8f8ff'><tt>f8f8ff</tt> ghost white</label>
        <!-- alice blue        --><label style="--bgcolor:#f0f8ff"><input type=radio name=whups value='#f0f8ff'><tt>f0f8ff</tt> alice blue</label>
        <!-- lavender blush    --><label style="--bgcolor:#fff0f5"><input type=radio name=whups value='#fff0f5'><tt>fff0f5</tt> lavender blush</label>
        <!-- silver            --><label style="--bgcolor:#e6e8fa"><input type=radio name=whups value='#e6e8fa'><tt>e6e8fa</tt> silver</label>
        <!-- white smoke       --><label style="--bgcolor:#f5f5f5"><input type=radio name=whups value='#f5f5f5'><tt>f5f5f5</tt> white smoke</label>
        <!-- floral white      --><label style="--bgcolor:#fffaf0"><input type=radio name=whups value='#fffaf0'><tt>fffaf0</tt> floral white</label>
        <!-- light goldenrod   --><label style="--bgcolor:#fafad2"><input type=radio name=whups value='#fafad2'><tt>fafad2</tt> light goldenrod </label>
        <!-- cornsilk          --><label style="--bgcolor:#fff8dc"><input type=radio name=whups value='#fff8dc'><tt>fff8dc</tt> cornsilk</label>
        <!-- antique white     --><label style="--bgcolor:#faebd7"><input type=radio name=whups value='#faebd7'><tt>faebd7</tt> antique white</label>
        <!-- beige             --><label style="--bgcolor:#f5f5dc"><input type=radio name=whups value='#f5f5dc'><tt>f5f5dc</tt> beige</label>
        <!-- moccasin          --><label style="--bgcolor:#ffe4b5"><input type=radio name=whups value='#ffe4b5'><tt>ffe4b5</tt> moccasin</label>
        <!-- papaya whip       --><label style="--bgcolor:#ffefd5"><input type=radio name=whups value='#ffefd5'><tt>ffefd5</tt> papaya whip</label>
        <!-- peach puff        --><label style="--bgcolor:#ffdab9"><input type=radio name=whups value='#ffdab9'><tt>ffdab9</tt> peach puff</label>
        <!-- bisque            --><label style="--bgcolor:#ffe4c4"><input type=radio name=whups value='#ffe4c4'><tt>ffe4c4</tt> bisque</label>
        <!-- blanched almond   --><label style="--bgcolor:#ffebcd"><input type=radio name=whups value='#ffebcd'><tt>ffebcd</tt> blanched almond</label>
        <!-- khaki             --><label style="--bgcolor:#f0e68c"><input type=radio name=whups value='#f0e68c'><tt>f0e68c</tt> khaki</label>
        <!-- honeydew          --><label style="--bgcolor:#f0fff0"><input type=radio name=whups value='#f0fff0'><tt>f0fff0</tt> honeydew</label>
        <!-- ivory             --><label style="--bgcolor:#fffff0"><input type=radio name=whups value='#fffff0'><tt>fffff0</tt> ivory</label>
        <!-- lemon chiffon     --><label style="--bgcolor:#fffacd"><input type=radio name=whups value='#fffacd'><tt>fffacd</tt> lemon chiffon</label>
        <!-- light yellow      --><label style="--bgcolor:#ffffe0"><input type=radio name=whups value='#ffffe0'><tt>ffffe0</tt> light yellow</label>
        <!-- linen             --><label style="--bgcolor:#faf0e6"><input type=radio name=whups value='#faf0e6'><tt>faf0e6</tt> linen</label>
        <!-- misty rose        --><label style="--bgcolor:#ffe4e1"><input type=radio name=whups value='#ffe4e1'><tt>ffe4e1</tt> misty rose</label>
        <!-- old lace          --><label style="--bgcolor:#fdf5e6"><input type=radio name=whups value='#fdf5e6'><tt>fdf5e6</tt> old lace</label>
        <!-- seashell          --><label style="--bgcolor:#fff5ee"><input type=radio name=whups value='#fff5ee'><tt>fff5ee</tt> seashell</label>
        <!-- snow              --><label style="--bgcolor:#fffafa"><input type=radio name=whups value='#fffafa'><tt>fffafa</tt> snow</label>
    </main>
    <?php $html = ob_get_clean(); ?>
    <?php echo $html; ?>
    <hr>

    Written December 3, 1997<br>
    Last updated <b>July 10, 1998</b><br>
    <span class="date-attribution"><i>Adapted</i> May 23, 2025 </span><br><br>

    <small>original <a href="http://r937.com/rudysbg.htm">http://r937.com/rudysbg.htm</a>
    (<a href="https://codepen.io/artlung/pen/jEPNQgg">CodePen</a>)
    </small>
<hr>

    <?php $lab = new ArtlungLab\Lab(); ?>
<details>
    <summary>Source Code</summary>
    <h2>HTML</h2>
    <?php
    $lab->displayCode($html);
    ?>
    <h2>SCSS</h2>
    <?php
    $lab->displayCode(file_get_contents(__DIR__ . '/rudysbg.scss'));
    ?>
    <h2>CSS (compiled)</h2>
    <?php
    $css = file_get_contents(__DIR__ . '/rudysbg.css');
    // split on } and add } plus newline
    $css = preg_replace('/\}\s*/', "}\n", $css);
    $lab->displayCode($css);
    ?>

</details>


</body>
</html>