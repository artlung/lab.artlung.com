<?php
/**
 * @param  $color
 * @return string
 */
function contrastingBlackOrWhite($color)
{
    $color = str_replace('#', '', $color);
    $red = hexdec(substr($color, 0, 1) . substr($color, 0, 1));
    $green = hexdec(substr($color, 1, 1) . substr($color, 1, 1));
    $blue = hexdec(substr($color, 2, 1) . substr($color, 2, 1));
    $yiq = (($red * 299) + ($green * 587) + ($blue * 114)) / 1000;
    return ($yiq >= 128) ? 'black' : 'white';
}

$all = array();
$chars = array('0', '3', '6', '9', 'C', 'F');
foreach ($chars as $a) {
    foreach ($chars as $b) {
        foreach ($chars as $c) {
            $all[] = '#' . $a . $b . $c;
        }
    }
}
rsort($all);


foreach ($all as $c) {
    $backgroundColor = $c;
    $white_or_black = contrastingBlackOrWhite($backgroundColor);
    echo "<div style=\"background-color: {$backgroundColor};color: {$white_or_black}\">{$backgroundColor}</div>";
}

$all_code = '<?php' . "\n" . '$all = ' . var_export($all, true) . ';';
echo "<pre>";
echo highlight_string($all_code, true);
echo "</pre>";

