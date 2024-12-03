<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Frameset//EN">
<head>
    <title>JavaScript Anti-Cache Dropdown Navigation</title>
</head>
<frameset rows="80%,20%">
    <frame src="the-content.php<?php
    echo '?' . filemtime('the-content.php');
    ?>" name="targetWINDOW">
    <frame src="the-navigation.php<?php
    echo '?' . filemtime('the-navigation.php');
    ?>" name="navWINDOW">
    ?>">
</frameset>
<noframes>
    <?php
    $lab = new Lab();
    $lab->printHeader('JavaScript Anti-Cache Dropdown Navigtion');
    ?>
    <a href="the-content.php">See The Code</a>
    <?php
    $lab->printFooter(
        [
            'comments' => true
        ]
    ); ?>
</noframes>
