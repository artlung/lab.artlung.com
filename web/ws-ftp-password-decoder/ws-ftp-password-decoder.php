<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader(
    '
WS_FTP JavaScript Password Decoder
'
);

?>


    <p class="date-attribution">Created May 2001</p>
    <h1>WS_FTP JavaScript Password Decoder</h1>

    <pre>
Go into the .ini file, and look for the lines which begin with PWD.
Enter the value of the PWD line:

It should look like hex encoded gobbledegook with "PWD=" attached to it:
PWD=V1DF32C1C88985F24FE8A3D03783C07E2A1667BA9AD77A96E
</pre>

    <form action="./" onsubmit="return false;">


        <table border="0" cellspacing="0" cellpadding="4">
            <tr>
                <td align="right">Encoded PWD Line</td>
                <td><input name="obscured_entry" size="60"><input name="button1"
                                                                  onclick="wsFTP_decoder(obscured_entry.value)"
                                                                  type="button" value="Decode"></td>
            </tr>
            <tr>
                <td align="right">Decoded Password</td>
                <td><input name="decoded_entry" size="60"><input type="reset" value="Reset Fields"></td>
            </tr>
        </table>


    </form>

    <hr/>

    <h2>Update 2015 from Tomasz:</h2>

    <blockquote>
        Hey, there!
        <br/>
        <br/>

        I found your WS_FTP old hash decoder, and some people were complaining that it doesn't decode the new WS_FTP
        hashes, so I thought I'd give you a hint in case you don't know the solution already, and feel like updating it
        some time in the future.
        <br/>
        <br/>
        Check out this code - I implemented everything that's needed to decode WS_FTP version &gt;=12 hashes here.<br/>
        <a href="https://github.com/Ciastex/UniDec/blob/master/UniDec.WSFTP12.Codec/Codec.cs">https://github.com/Ciastex/UniDec/blob/master/UniDec.WSFTP12.Codec/Codec.cs</a>
        <br/>
        <br/>
        I hope it'll help you a bit.
    </blockquote>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
