<?php
require_once __DIR__ . '/../../loader.php';
$lab = new Lab();
$lab->printHeader(
    '
MM_validateForm() and MM_findObj() functions
'
);

?>

    <p class="date-attribution">Created: 2009-06-08</p>

    <h1>MM_validateForm() and MM_findObj() functions</h1>

    <p>
        There does not seem to be a canonical source for these Macromedia Dreamweaver functions, this page is a source
        for that source.
    </p>

    <pre>
&lt;script type="text/javascript"&gt;
// Version 4.01
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))&gt;0&amp;&amp;parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&amp;&amp;d.all) x=d.all[n]; for (i=0;!x&amp;&amp;i&lt;d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&amp;&amp;d.layers&amp;&amp;i&lt;d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x &amp;&amp; d.getElementById) x=d.getElementById(n); return x;
}
&lt;/script&gt;
</pre>
    <pre>
&lt;script type="text/javascript"&gt;
// Version 3.0
function MM_validateForm() { //v3.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i&lt;(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p&lt;1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (val!=''+num) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num&lt;min || max&lt;num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
&lt;/script&gt;
</pre>
    <pre>
&lt;script type="text/javascript"&gt;
// Version 4.0
function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i&lt;(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p&lt;1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') {
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (val&lt;min || max&lt;val) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
&lt;/script&gt;
</pre>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
