<?php include_once("../inc.functions.php") ?>
<?php include_once("../inc.header1of2.php") ?>
Stupid Growing CSS Tricks
<?php include_once("../inc.header2of2.php") ?>

<style type="text/css">
<!--
span { font-size: 120%; }
//-->
</style> 

<p style="text-align: right">created march 2001</p>

<h1>Stupid Growing CSS Tricks</h1>
<p>When you nest an element and have the font-size: set in percentages, some interesting things can happen</p>

<p>
<span>Is 
  <span>this 
    <span>a 
      <span>case 
        <span>of 
          <span>diminishing 
            <span>returns, 
              <span>or 
                <span>expanding
                  <span>ones?</span> 
                </span>
              </span>
            </span>
          </span>
        </span>
      </span>
    </span>
  </span>
</span>
</p>

<h2>Source Code</h2>
<pre>
&lt;style type="text/css"&gt;
span { font-size: 120%; }
&lt;/style&gt; 
</pre>

<pre>
&lt;span&gt;Is 
  &lt;span&gt;this 
    &lt;span&gt;a 
      &lt;span&gt;case 
        &lt;span&gt;of 
          &lt;span&gt;diminishing 
            &lt;span&gt;returns, 
              &lt;span&gt;or 
                &lt;span&gt;expanding
                  &lt;span&gt;ones?&lt;/span&gt; 
                &lt;/span&gt;
              &lt;/span&gt;
            &lt;/span&gt;
          &lt;/span&gt;
        &lt;/span&gt;
      &lt;/span&gt;
    &lt;/span&gt;
  &lt;/span&gt;
&lt;/span&gt;
</pre>







<?php include_once("../inc.footer.php") ?>

