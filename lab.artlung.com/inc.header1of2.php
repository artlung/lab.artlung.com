<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <?php
    $cacheBust = filectime('2024.css');
    printf('<link rel="stylesheet" href="/2024.css?b=%s" type="text/css" />', $cacheBust);

    ?>
<meta name="viewport" content="width=device-width, initial-scale=1" />

<script src="/javascript.js"></script>
<title>
