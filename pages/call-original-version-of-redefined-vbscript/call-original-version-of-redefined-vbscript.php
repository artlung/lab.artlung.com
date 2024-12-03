<?php
require_once '../../loader.php';
$lab = new Lab();
$lab->printHeader(
    '
Call the native version of a VBScript object
'
);

?>

    <p class="date-attribution">Created November 2006. Posted August 2016.</p>

    <h1>
        Call the native version of a VBScript object
    </h1>

    <p>
        Let's say you've redefined a VBScript item, for example a function like <code>Left</code>. How would you call
        the original version of that function if you needed to?
    </p>

    <p>To be honest, I wrote this so long ago I can't remember <i>why</i> I wrote it. But here it is.</p>

    <pre>
&lt;% 
Option Explicit

' This redefines the "left" function 
Function Left(mystring,mynumber) 
        Left = Right(mystring,mynumber) 
End Function

Dim sc, cmd 
' This code is the way to get to the "real" old version 
<b>set sc = CreateObject("MSScriptControl.ScriptControl")</b>
' set the language 
<b>sc.Language = "VBScript"</b> 
' what command do you want to call? 
<b>cmd = "Left(""hello"",1)"</b>

Response.Write "&lt;hr&gt;" 
Response.Write Eval(cmd) 
Response.Write "&lt;hr&gt;" 
Response.Write Left("hello", 1) 
Response.Write "&lt;hr&gt;" 
' here we call the one that produces the right result 
Response.Write <b>sc.Eval(cmd)</b>
Response.Write "&lt;hr&gt;"

%&gt;
</pre>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
