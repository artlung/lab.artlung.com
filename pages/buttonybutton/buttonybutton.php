<?php

/**
 * Buttony Button. TODO redo.
 * php version 7.4
 *
 * @category Silly
 * @package  Silly
 * @author   Joe Crawford <joe@artlung.com>
 * @license  GPL 2.0+ - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version  GIT: $Id$
 * @link     https://artlung.com/
 * @since    2024-12-03
 */
?>
<html>
<head>
    <title>Buttony Button.</title>
    <style type="text/css">
        body {
            margin: 1em;
        }

        button {
            height: 100%;
            width: 100%;
            border: 4px solid #666;
            font-size: 4em;
            background: #1e5799; /* Old browsers */
            background: -moz-linear-gradient(top, #1e5799 0%, #2989d8 50%, #207cca 51%, #7db9e8 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #1e5799), color-stop(50%, #2989d8), color-stop(51%, #207cca), color-stop(100%, #7db9e8)); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top, #1e5799 0%, #2989d8 50%, #207cca 51%, #7db9e8 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top, #1e5799 0%, #2989d8 50%, #207cca 51%, #7db9e8 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top, #1e5799 0%, #2989d8 50%, #207cca 51%, #7db9e8 100%); /* IE10+ */
            background: linear-gradient(to bottom, #1e5799 0%, #2989d8 50%, #207cca 51%, #7db9e8 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#1e5799', endColorstr='#7db9e8', GradientType=0); /* IE6-9 */
            border-radius: 1em;
            outline: none;
        }
    </style>
    <script type="text/javascript">
        var to;

        function r() {
            document.getElementById("x").innerHTML = "Buttony.";
        }
    </script>
    <script src="/2025.js<?php
    echo '?' . filemtime('../2025.js');
    ?>"></script>
</head>
<body title="for @areus">
<button id="x" onclick="this.innerHTML='Clicky click.';clearTimeout(to);setTimeout('r()',2000);">Buttony.</button>
</body>
</html>
