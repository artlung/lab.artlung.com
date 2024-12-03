<?php
require_once __DIR__ . '/../../loader.php';
$lab = new Lab();
$lab->printHeader(
    'Several Approaches to Do Image Borders of Different Colors: 1999', [
        'body-tag' => '<body bgcolor="darkgray" text="#000000" link="#FF0000" vlink="#800000" alink="#FF00FF">'
    ]
);
?>


    <p class="date-attribution">Created: August 12, 1999</p>

    <h1>Several Approaches to Do Image Borders of Different Colors: 1999</h1>

    <pre>&lt;body bgcolor="darkgray" text="#000000" link="#FF0000" vlink="#800000" alink="#FF00FF"&gt;</pre>

    <table>
        <tr>
            <td><font color=yellow><img src="blank.gif" alt="" border=1 alt="" width=100 height=100></font><br></td>
            <td>
                <pre>&lt;font color=yellow&gt;&lt;img src="blank.gif" alt="" border=1 alt="" width=100 height=100&gt;&lt;/font&gt;&lt;br&gt;</pre>
            </td>
        </tr>

        <tr>
            <td><a href="#"><img src="blank.gif" alt="" border=1 alt="" width=100 height=100></a><br></td>
            <td>
                <pre>&lt;a href="#"&gt;&lt;img src="blank.gif" alt="" border=1 alt="" width=100 height=100&gt;&lt;/a&gt;&lt;br&gt;</pre>
            </td>
        </tr>

        <tr>
            <td><img src="blank.gif" alt="" border=1 alt="" width=100 height=100><br></td>
            <td>
                <pre>&lt;img src="blank.gif" alt="" border=1 alt="" width=100 height=100&gt;&lt;br&gt;</pre>
            </td>
        </tr>

        <tr>
            <td><a href="#"><font color=yellow><img src="blank.gif" alt="" border=1 alt="" width=100 height=100></font></a><br>
            </td>
            <td>
                <pre>&lt;a href="#"&gt;&lt;font color=yellow&gt;&lt;img src="blank.gif" alt="" border=1 alt="" width=100 height=100&gt;&lt;/font&gt;&lt;/a&gt;&lt;br&gt;</pre>
            </td>
        </tr>

        <tr>
            <td><font color=yellow><a href="#"><img src="blank.gif" alt="" border=1 alt="" width=100
                                                    height=100></a></font><br></td>
            <td>
                <pre>&lt;font color=yellow&gt;&lt;a href="#"&gt;&lt;img src="blank.gif" alt="" border=1 alt="" width=100 height=100&gt;&lt;/a&gt;&lt;/font&gt;&lt;br&gt;</pre>
            </td>
        </tr>

        <tr>
            <td>
                <table width=102 height=102 cellpadding=0 cellspacing=0 border=0 bgcolor=yellow>
                    <tr>
                        <td valign=center align=middle><img src="blank.gif" alt="" border=0 alt="" width=100 height=100>
                        </td>
                    </tr>
                </table>
                <br></td>
            <td>
                <pre>&lt;table width=102 height=102 cellpadding=0 cellspacing=0 border=0 bgcolor=yellow&gt;&lt;tr&gt;&lt;td valign=center align=middle&gt;&lt;img src="blank.gif" alt="" border=0 alt="" width=100 height=100&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;br&gt;</pre>
            </td>
        </tr>
    </table>


    </font>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
