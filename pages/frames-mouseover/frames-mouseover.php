<?php
/**
 * Frames mouseover demonstration
 * php version 7.2
 *
 * @category PHP
 * @package  Frames_Mouseover
 * @author   Joe Crawford <joe@artlung.com>
 * @license  GPL 2.0+ - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version  GIT: $Id$
 * @link     https://artlung.com/
 * @since    2024-12-03
 */
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN"
        "http://www.w3.org/TR/1999/REC-html401-19991224/frameset.dtd">
<html>
<head>
    <title>Demonstration Of An Image Swap In Another Frame Triggered By A Mouseover</title>

    <script language="JavaScript" type="text/javascript">
        <!--//
        if (document.images) {
            toc1on = new Image(42, 197);
            toc1on.src = "http://www.artlung.com/archive/2/menumouse/newctlbl.GIF";
            toc2on = new Image(42, 197);
            toc2on.src = "http://www.artlung.com/archive/2/menumouse/biogtlbl.GIF";
            toc3on = new Image(42, 197);
            toc3on.src = "http://www.artlung.com/archive/2/menumouse/favetlbl.GIF";
            toc4on = new Image(42, 197);
            toc4on.src = "http://www.artlung.com/archive/2/menumouse/resutlbl.GIF";
            toc5on = new Image(42, 197);
            toc5on.src = "http://www.artlung.com/archive/2/menumouse/porttlbl.GIF";
            toc6on = new Image(42, 197);
            toc6on.src = "http://www.artlung.com/archive/2/menumouse/hometlbl.GIF";
            toc7on = new Image(42, 197);
            toc7on.src = "http://www.artlung.com/archive/2/menumouse/emaitlbl.GIF";

            toc1off = new Image(42, 197);
            toc1off.src = "http://www.artlung.com/archive/2/menumouse/newctubu.GIF";
            toc2off = new Image(42, 197);
            toc2off.src = "http://www.artlung.com/archive/2/menumouse/biogtubu.GIF";
            toc3off = new Image(42, 197);
            toc3off.src = "http://www.artlung.com/archive/2/menumouse/favetubu.GIF";
            toc4off = new Image(42, 197);
            toc4off.src = "http://www.artlung.com/archive/2/menumouse/resutubu.GIF";
            toc5off = new Image(42, 197);
            toc5off.src = "http://www.artlung.com/archive/2/menumouse/porttubu.GIF";
            toc6off = new Image(42, 197);
            toc6off.src = "http://www.artlung.com/archive/2/menumouse/hometubu.GIF";
            toc7off = new Image(42, 197);
            toc7off.src = "http://www.artlung.com/archive/2/menumouse/emaitubu.GIF";
        }

        function img_act(imgName) {
            if (document.images) {
                imgOn = eval(imgName + "on.src");
                top.frames[1].document [imgName].src = imgOn;
            }
        }

        function img_inact(imgName) {
            if (document.images) {
                imgOff = eval(imgName + "off.src");
                top.frames[1].document [imgName].src = imgOff;
            }
        }

        // -->
    </script>
</head>
<frameset rows="50%,50%">
    <frame src="top-frame.php" name="mid_topone" marginwidth="0" marginheight="0" scrolling="no" noresize>
    <frame src="bot-frame.php" name="mid_botone" marginwidth="0" marginheight="0" scrolling="no" noresize>
</frameset>
</html>
