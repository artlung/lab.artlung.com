<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('camelCase <-> selector-case in JavaScript without Regex');

?>


    <style type="text/css">
        <!--
        pre {
            color: #333;
            background-color: #9FC
        }

        pre b {
            color: #000;
            background-color: #CFC;
        }

        .fourHundredWide {
            width: 400px;
        }

        /
        /
        -->
    </style>
    <script language="JavaScript" type="text/javascript">
        <!--
        /*
         ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
         an alternative way to convert style properties
         between selector case and camel case.
         because joe crawford is a bit nuts.
         https://artlung.com/
         ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        */
        function noRegexToCamel(str) { // converts to camelCase
            str = str.split('-');
            var outstr = str[0];
            for (i = 1; i < str.length; i++) {
                outstr = outstr + str[i].charAt(0).toUpperCase() + str[i].substring(1)
            }
            return outstr;
        }

        function noRegexToSel(str) { // converts to selector-case
            var outstr = "";
            for (i = 0; i < str.length; i++) {
                (str.charAt(i) == str.charAt(i).toUpperCase()) ? outstr = outstr + '-' + str.charAt(i).toLowerCase() : outstr = outstr + str.charAt(i);
            }
            return outstr;
        }

        //-->
    </script>
    <p class="date-attribution">Created 03/2002</p>
    <h1 class="p-name">camelCase &lt;-&gt; selector-case in JavaScript w/o Regex</h1>

    <div class="fourHundredWide">
        <p>Scott Andrew <a href="http://www.scottandrew.com/weblog/000175">pointed to</a>
            <a href="http://timmorgan.info/jude/logarchives/000295.html">Tim Morgan's camelCase &lt;-&gt;
                selector-case</a> functions. Screaming Jedi cool.
            But they use JavaScript regular expressions. JavaScript regular expressions I've never gotten cozy with.
            Perhaps I should seek counseling. Love the Regular Expressions in <a href="http://www.php.net">PHP</a> and
            <a href="http://www.macromedia.com/software/coldfusion/">Cold Fusion</a> though.
        </p>
        <p>
            Anyway, here are some alternative functions, and a demonstration too. <i><a
                        href="http://www.wikipedia.com/wiki/CamelCase">More on camelCase.</a></i>
        </p>
        <p>
            <em>Useless.</em></p>
        <p>
            Share and enjoy.
        </p>

    </div>


    <form action="./" method="get" onsubmit="return false;">

<pre>
function noRegexToCamel(str) { <b>// converts to camelCase</b>
  str=str.split('-');
  var outstr = str[0];
  for(i=1;i&lt;str.length;i++){
   outstr=outstr+str[i].charAt(0).toUpperCase()+str[i].substring(1)
  }
return outstr;
}
</pre>
        <p>
            <b>Try it! Enter something in selector-case below:</b><br>
            <input type="text" name="sample_selector" value="hello-world-foo-bar" size="30"><input type="button"
                                                                                                   value="noRegexToCamel()"
                                                                                                   onclick="this.form.selectorResult.value=noRegexToCamel(this.form.sample_selector.value)"><input
                    type="text" name="selectorResult" size="30"></p>

        <hr noshade>

        <pre>
function noRegexToSel(str) { <b>// converts to selector-case</b>
  var outstr="";
  for(i=0;i&lt;str.length;i++){
   (str.charAt(i)==str.charAt(i).toUpperCase())?outstr=outstr+'-'+str.charAt(i).toLowerCase():outstr=outstr+str.charAt(i);
  }
return outstr;
}
</pre>
        <p>
            <b>Try it! Enter something in camelCase below:</b><br>
            <input type="text" name="sample_camel" value="barFooHelloWorld" size="30"><input type="button"
                                                                                             value="noRegexToSel()"
                                                                                             onclick="this.form.camelResult.value=noRegexToSel(this.form.sample_camel.value)"><input
                    type="text" name="camelResult" size="30"></p>

    </form>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
