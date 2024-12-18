<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('Artlung Rosetta');
?>

    <p class="date-attribution">Created in 2010. Integrated in 2024</p>
    <div style="max-width: 100ch">


        <h1>Artlung Rosetta</h1>

        <h2>Several Versions</h2>

        <p>
            Open each of the following six pages in browser tabs.
            The HTML source code of the page should be identical.
            The way the items look and interact when you click or hover over them should be equivalent.
            Each one loads a different JavaScript library.
            On each page, the implementation code loads into the bottom of the page as plaintext.
        </p>

        <ul style="font-size: xx-large">
            <li><a href="./?dojo">dojo</a></li>
            <li><a href="./?ext">Ext Core</a></li>
            <li><a href="./?glow">Glow</a></li>
            <li><a href="./?jquery">jQuery</a></li>
            <li><a href="./?mootools">MooTools</a></li>
            <li><a href="./?prototype">Prototype</a></li>
        </ul>

        <h2>Purpose</h2>
        <p>
            Artlung Rosetta is intended as a tool to explore the syntax of JavaScript libraries. Basic page
            manipulations,
            adding, showing, hiding content, appending text and html, adding events, etc.
        </p>

        <p>
            Since learning a new syntax can be daunting, a "Rosetta Stone" would be helpful to compare and contrast code
            from
            the syntax of a library you know, versus a library you don't know.
        </p>

        <h2>How to compare</h2>
        <p>
            My suggestion is to open each page in a different tab in your browser and editor and watch the interactions.
            The
            source code for the main script will load at the bottom of the page, compare and contrast the code from page
            to
            page. If anyone has a better idea as to how to document these differences I'm all ears. Perhaps it would be
            better
            to have individual pages with each kind of action, but I think having all the syntax for a single HTML page
            aids
            learning. Again though, I'm all ears.
        </p>

        <h2>Resources</h2>
        <dl>
            <dt>Dojo Toolkit</dt>
            <dd><a href="http://www.dojotoolkit.org/">dojotoolkit.org</a>



            </dd>
            <dd>
                <s><a href="http://twitter.com/dojo"
                      title="Twitter account">@dojo</a></s> &rarr;
                <a href="https://x,com/dojoframework" title="X account">@dojoframework</a>

            </dd>
            <dt>Ext Core &rarr; Sencha</dt>
            <dd><a href="http://www.extjs.com/">extjs.com</a>



            </dd>
            <dd>
                <s><a href="http://twitter.com/ExtJS"
                      title="Twitter account">@ExtJS</a></s>
                &rarr;
                <a href="https://x.com/sencha" title="X account">@Sencha</a>
            </dd>
            <dt>
                Glow
            </dt>
            <dd>
                <a href="http://www.bbc.co.uk/glow/">Glow</a>
            </dd>
            <dt>
                jQuery
            </dt>
            <dd><a href="http://www.jquery.com/">jquery.com</a>
            </dd>
            <dd>
                <a href="http://twitter.com/jquery"
                   title="Twitter account">@jquery</a>
            </dd>
            <dt>
                MooTools
            </dt>
            <dd>
                <a href="http://mootools.net/">mootools.net</a>
            </dd>
            <dd>
                <a href="http://twitter.com/Mootools" title="Twitter account">@Mootools</a>
            </dd>
            <dt>
                PrototypeJS
            </dt>
            <dd><a href="http://www.prototypejs.org/">prototypejs.org</a>
            </dd>
            <dd>
                <a href="http://twitter.com/prototypejs"
                   title="Twitter account">@prototypejs</a>
            </dd>
        </dl>


        <p>
            <b>Created by:</b> <a href="https://artlung.com/">Joe Crawford</a> <a
                    href="mailto:joe@artlung.com">joe@artlung.com</a> in 2010.
        </p>

        <p><s>Hosted on GitHub at <a
                        href="http://github.com/artlung/Artlung-Rosetta/">http://github.com/artlung/Artlung-Rosetta/</a>
            </s>
        </p>
    </div>

<hr>

<h2>Original README.md from 2010</h2>

<div style="    max-width: 110ch;
    border: 1px solid #000;
    padding: 2rem;
    box-shadow: 0 0 3px;">
    <h3>Artlung Rosetta</h3>
    <p>Compare how to do the same thing with the same HTML with different JavaScript libraries. Behaviors and display should be
        as alike as practical. Libraries include:</p>
    <ul>
        <li>Dojo</li>
        <li>Glow</li>
        <li>ExtCore</li>
        <li>jQuery</li>
        <li>MooTools</li>
        <li>Prototype</li>
    </ul>
    <p><strong>tl;dr:</strong></p>
    <ul>
        <li>Same HTML code</li>
        <li>Same behaviors</li>
        <li>Different JavaScript library loaded</li>
        <li>Thus different implementation code</li>
    </ul>
    <p><strong>For Example:</strong></p>
    <p>The following code adds a click event to any <code>&lt;input&gt;</code> inside an element
        with an <code>id</code> of <code>interactionExperiments</code>. On click, it will make that input
        disappear. You can see some libraries implement a <code>hide()</code> method, while
        some don&#39;t (seem) to have one available, so you have to set
        <code>style.display = &#39;none&#39;</code> or in the case of MooTools you do
        <code>.setStyle({&#39;display&#39;:&#39;none&#39;})</code>. I&#39;m not sure I&#39;m speaking these libraries
        as idiomatically as I could, and I look forward to your contributions,
        via email or GitHub.</p>
    <p><strong>jQuery:</strong></p>
    <pre><code>$(<span class="hljs-string">'#interactionExperiments button'</span>).click(<span class="hljs-function"><span class="hljs-keyword">function</span>(<span class="hljs-params"></span>)</span>{
   $(<span class="hljs-keyword">this</span>).hide();
   <span class="hljs-keyword">return</span> <span class="hljs-literal">false</span>;
});
</code></pre><p><strong>Dojo:</strong></p>
    <pre><code>dojo.query(<span class="hljs-string">'#interactionExperiments button'</span>).<span class="hljs-keyword">forEach</span>(<span class="hljs-function"><span class="hljs-keyword">function</span><span class="hljs-params">(item)</span></span>{
   dojo.connect(item, <span class="hljs-string">'onclick'</span>, <span class="hljs-function"><span class="hljs-keyword">function</span><span class="hljs-params">(e)</span></span>{
      item.style.display = <span class="hljs-string">'none'</span>;
      dojo.stopEvent(e);
   });
});
</code></pre><p><strong>ExtCore:</strong></p>
    <pre><code>Ext.select(<span class="hljs-string">'#interactionExperiments button'</span>).on(<span class="hljs-string">'click'</span>, <span class="hljs-function"><span class="hljs-keyword">function</span><span class="hljs-params">(e, target)</span></span>{
   Ext.get(target).hide();
}, <span class="hljs-literal">null</span>, {preventDefault:<span class="hljs-literal">true</span>});
</code></pre><p><strong>Glow:</strong></p>
    <pre><code>glow.events.addListener(<span class="hljs-string">'#interactionExperiments button'</span>, <span class="hljs-string">'click'</span>, <span class="hljs-function"><span class="hljs-keyword">function</span><span class="hljs-params">(e)</span></span>{
   glow.dom.get(<span class="hljs-keyword">this</span>).hide();
   <span class="hljs-keyword">return</span> <span class="hljs-literal">false</span>;
});
</code></pre><p><strong>MooTools:</strong></p>
    <pre><code>$$(<span class="hljs-string">'#interactionExperiments button'</span>).addEvent(<span class="hljs-string">'click'</span>, <span class="hljs-function"><span class="hljs-keyword">function</span>(<span class="hljs-params">e</span>)</span>{
   <span class="hljs-keyword">this</span>.setStyle(<span class="hljs-string">'display'</span>,<span class="hljs-string">'none'</span>);
   e.stop();
});
</code></pre><p><strong>Prototype:</strong></p>
    <pre><code>$$(<span class="hljs-string">'#interactionExperiments button'</span>).each(<span class="hljs-function"><span class="hljs-keyword">function</span>(<span class="hljs-params">item</span>)</span>{
   item.observe(<span class="hljs-string">'click'</span>, <span class="hljs-function"><span class="hljs-keyword">function</span>(<span class="hljs-params">evt</span>)</span>{
      item.hide();
      Event.stop(evt);
   });
});


</div>





<?php
$lab->printFooter(
    [
    'comments' => true
    ]
);