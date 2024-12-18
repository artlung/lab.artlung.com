<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('In VBScript, It\'s always "Elseif" and never "Else If"');

?>

    <p class="date-attribution">Created August 2016</p>

    <h1>
        In VBScript, It's always "Elseif" and never "Else If"
    </h1>


    <h2>Simple "Else" is no problem.</h2>

    <pre>
If 1 = 1 Then
    Wscript.Echo("1 is 1")
Else
    Wscript.Echo("1 is not 1")
End If
</pre>

    Result:

    <pre class="console">
C:\cscript test.vbs
Microsoft (R) Windows Script Host Version 5.8
Copyright (C) Microsoft Corporation. All rights reserved.

1 is 1
</pre>


    <h2>"Elseif" is correct.</h2>

    <pre>
' correct syntax "Elseif"
If 1 = 1 Then
    Wscript.Echo "1 is 1"
Elseif 2 = 2 Then
    Wscript.Echo "1 is 2"
Elseif 3 = 3 Then
    Wscript.Echo "1 is 3"
End If
</pre>

    Result:

    <pre class="console">
C:\cscript test.vbs
Microsoft (R) Windows Script Host Version 5.8
Copyright (C) Microsoft Corporation. All rights reserved.

1 is 1
</pre>

    <h2>"Else if" with a space is WRONG.</h2>

    <pre>
' The Wrong Syntax - no "Else If" in VBScript
If 1 = 1 Then
    Wscript.Echo "1 is 1"
Else If 2 = 2 Then
    Wscript.Echo "1 is 2"
Else If 3 = 3 Then
    Wscript.Echo "1 is 3"
End If
</pre>

    Result:

    <pre class="console">
C:\cscript test.vbs
Microsoft (R) Windows Script Host Version 5.8
Copyright (C) Microsoft Corporation. All rights reserved.
C:\test.vbs(7, 7) Microsoft VBScript compilation error: Expected 'End'
</pre>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
