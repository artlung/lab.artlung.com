<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('Stupid Growing CSS Tricks');
?>

<p class="date-attribution">created March 2001</p>

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







<?php
$lab->printFooter();

