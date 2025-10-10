<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader(
    'Comics Accessibility'
);

?>
    <link rel="stylesheet" type="text/css" href="comics-a11y.css<?php
    echo '?v=' . filemtime(__DIR__ . '/comics-a11y.css'); ?>">

    <p class="date-attribution">Created Jul 2025</p>
    <h1 class="p-name">Comics Accessibility <mark>[DRAFT IN PROGRESS]</mark></h1>

    <p>I started this page during <a href="https://indieweb.org/events/2025-07-17-front-end-study-hall">Front End Study Hall #032</a>. Thanks to everyone who participated in that original discussion and contributed via the <a href="http://indieweb.org">indieweb</a> chat.</p>

<p>My goal is to collect examples of different techniques for adding transcripts, scripts, alt text, etc to allow for accessible comics for users with different abilities.</p>

<p>If you'd like to contribute an example please reach out! Comments and webmentions are enabled. And you can also find me on Bluesky and Mastodon via my
<a href="https://artlung.com/links/">links page</a>. Also there's a GitHub link in the footer which is another way to contribute.
</p>

<p>
    Copyrights and any associated trademarks for the comics shown here are held by their respective authors.
</p>





<section class="example-artlung">
    <h2>Example from <a href="http://artlung.com/">Joe</a></h2>

    <p>
        This example uses <code>aria-describedby</code> to point at
        markup that describes the comic. I believe I can set the div with the description to be hidden
        and have that work in screen readers but it needs further testing.
    </p>

<?php ob_start() ?>
<div class="comic-image">
<img fetchpriority="high" decoding="async"
     src="https://cdn.artlung.com/blog/wp-content/uploads/2022/08/drop-it-like-its-bivalve-scaled.jpg"
     alt="A web comic" width="2560" height="2560"
     srcset="https://cdn.artlung.com/blog/wp-content/uploads/2022/08/drop-it-like-its-bivalve-scaled.jpg 2560w,
     https://cdn.artlung.com/blog/wp-content/uploads/2022/08/drop-it-like-its-bivalve-800x800.jpg 800w,
      https://cdn.artlung.com/blog/wp-content/uploads/2022/08/drop-it-like-its-bivalve-2048x2048.jpg 2048w,
       https://cdn.artlung.com/blog/wp-content/uploads/2022/08/drop-it-like-its-bivalve-100x100@2x.jpg 200w,
        https://cdn.artlung.com/blog/wp-content/uploads/2022/08/drop-it-like-its-bivalve-768x768.jpg 768w,
         https://cdn.artlung.com/blog/wp-content/uploads/2022/08/drop-it-like-its-bivalve-1536x1536.jpg 1536w,
          https://cdn.artlung.com/blog/wp-content/uploads/2022/08/drop-it-like-its-bivalve-100x100.jpg 100w,
           https://cdn.artlung.com/blog/wp-content/uploads/2022/08/drop-it-like-its-bivalve-800x800@2x.jpg 1600w,
            https://cdn.artlung.com/blog/wp-content/uploads/2022/08/drop-it-like-its-bivalve-200x200@2x.jpg 400w"
     sizes="(max-width: 2560px) 100vw, 2560px"
    aria-describedby="drop-it-text-version"
>
</div>
<div id="drop-it-text-version">
    <dl>
        <dt>
            Panel 1
        </dt>
        <dd>
            Image of a swimmer standing on a beach, turned
            away from viewer, carrying swim fins
        </dd>
        <dd>
            Caption: Sunday bodysurfing session done. I pause
            to appreciate the quiet beauty of...
        </dd>
        <dt>
            Panel 2
        </dt>
        <dd>
            Image of a something falling to the sand with
            a "THUD!"sound effect. The swimmer exclaims
            "yikes!" and jumps away.
        </dd>
        <dt>
            Panel 3a:
        </dt>
        <dd>
            Closeup image of a clam, with a crack in it,
        </dd>
        <dt>
            Panel 3b:
        </dt>
        <dd>
            Swimmer has a mobile phone out taking a photo of
            the clam
        </dd>
        <dd>
            Thought bubble: "A clam?!"
        </dd>
        <dt>
            Panel 4a:
        </dt>
        <dd>
            Image of a seagull flying downward, mouth open
            with the sound effect "SWOOP"
        </dd>
        <dt>
            Panel 4b:
        </dt>
        <dd>
            Image of the seagull tearing into the broken
            clam extracting meat
        </dd>
        <dd>
            Seagull exclaims "My clam!"
            The word "My" is emphasized.
        </dd>
        <dt>Panel 4c</dt>
        <dd>
            Closeup image of the swimmer's surprised face
        </dd>
        <dd>
            Caption: "ok then!:
        </dd>
        <dd>
            End of comic, signature reads "ARTLUNG"
        </dd>
    </dl>
</div>
<?php $html = ob_get_clean(); ?>

<?php print $html; ?>

<details>
    <summary>Sources</summary>
    <h2>HTML</h2>

    <?php $lab->printSource($html);  ?>

    <h2>SCSS</h2>

    <?php $lab->printSource(file_get_contents(__DIR__ . '/comics-a11y.scss')); ?>
</details>
</section>

<section class="example-benji">
    <h2>Example from
        <a href="https://benji.dog/">Benji</a>
    </h2>

    <p>
        This comic allows the user to toggle the display of descriptions which are initially hidden as paragraphs within each individual <code>div</code>
        element.

    </p>
    <p>See <a href="https://codepen.io/benjifs/pen/VYvvdJv">CodePen</a></p>


    <?php
    $html = file_get_contents(__DIR__ . '/_example-benji.html');
    print $html;
    ?>

    <details>
        <summary>Sources</summary>
        <h2>HTML</h2>
        <?php $lab->printSource($html);  ?>
        <h2>SCSS</h2>
        <?php $lab->printSource(file_get_contents(__DIR__ . '/_example-benji.scss')); ?>
    </details>

</section>


<section class="example-tantek">
    <h2>
        Example from <a href="http://tantek.com/">Tantek Çelik</a>
    </h2>
    <?php
    $html = file_get_contents(__DIR__ . '/_example-tantek.html');
    print $html;
    ?>

    <p>
        This comic uses <code>aria-label</code> to provide a description of the comic.
        and uses an <code>object</code> tag to enclose the comic image and the fallback text.
    </p>
    <p>
        See <a href="https://tantek.com/2013/149/b1/bayesian">Bayesian Comic</a>
    </p>

    <details>
        <summary>Sources</summary>
        <h2>HTML</h2>
        <?php $lab->printSource($html);  ?>
    </details>
</section>

<section class="example-jamesg">
    <h2>
        Example from <a href="http://jamesg.blog/">James</a>
    </h2>
    <p>
        This is markup and CSS with an included label and checkbox to toggle visibility of a separate <code>div</code> with a description.
    </p>
    <p>
        See <a href="https://playground.jamesg.blog/alt-text.html">Alt Text</a>
    </p>

    <?php
    $html = file_get_contents(__DIR__ . '/_example-jamesg.html');
    print $html;
    ?>

    <details>
        <summary>Sources</summary>
        <h2>HTML</h2>
        <?php $lab->printSource($html);  ?>
        <h2>SCSS</h2>
        <?php $lab->printSource(file_get_contents(__DIR__ . '/_example-jamesg.scss')); ?>
    </details>

</section>

<section class="example-mattl">
    <h2>
        Example via <a href="http://mat.tl/home/">mattl</a>
    </h2>

    <p>
        The plainest example of a comic with alt text. <em>(from <a href="https://en.wikipedia.org/wiki/David_Lynch
">David Lynch</a>'s "The Angriest Dog in the World"</em>
    </p>

    <?php
    $html = file_get_contents(__DIR__ . '/_example-mattl.html');
    print $html;
    ?>
    <details>
        <summary>Sources</summary>
        <h2>HTML</h2>
        <?php $lab->printSource($html);  ?>
    </details>

    <h3>
        VoiceOver recording of the above example:
    </h3>
    <audio controls>
        <source src="./angriest.mp3"
                type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

</section>


<section class="links">

    <h2>Links
        <mark>Feel free to suggest more!</mark>
    </h2>
    <ul>
        <li>
            <a href="https://lastcallmedia.com/blog/accessible-comics">Accessible Comics</a>
            - Last Call Media blog post
        </li>
        <li>
            <a href="https://broodhollow.fandom.com/wiki/User_blog:Lianakerr/On_Describing_Comics">On Describing Comics</a>
            - Broodhollow Fandom blog post
        </li>
        <li>
            <a href="https://docs.google.com/document/d/11hIqrMJ75YuLtUXbWf1CoxZstIVTf4k-1AleqXj3DpU/edit">Comics A11Y Symposium 2021: Agenda</a>
            - Some accessibility tips for publishing comics
        </li>
        <li>
            <a href="https://artlung.com/blog/2021/12/06/seminar-comics-a11y/">Adapting Comics for Blind & Low Vision Readers: Seminar Resources</a>
        </li>
        <li>
            <a href="https://www.youtube.com/watch?v=SQ94byTwat0">Adapting Comics for Blind and Low Vision Readers: A Roundtable Discussion</a>
            - YouTube video, 88min
        </li>
        <li>
            <a href="https://github.com/whatwg/html/issues/11448">
                Proposal for the HTML spec to indicate whether alt text is LLM/AI/machine generated or human written
            </a>
        </li>
        <!-- https://veroniiiica.com/how-to-write-alt-text-digital-comics/ -->
        <li>
            <a href="https://veroniiiica.com/how-to-write-alt-text-digital-comics/">How to Write Alt Text for Digital Comics</a>
            - Veronica Lewis
        </li>
        <li>
            <a href="https://www.youtube.com/watch?v=X8wcbJR9IaU">AI and Accessibility: the Good, the Bad, and the Bollocks</a>
            - Léonie Watson ~ this talk a bit about the use of discrimitive AI, to generate alt text or descriptions of
            images that lack them. Something is often better than nothing. But best is if authors provide their own
            descriptions I think.
        </li>

        <li>
            xkcd
            <a href="https://xkcd.com/">xkcd.com</a> uses an <code>img</code> tag with
            both an <code>alt</code> attribute and a <code>title</code> attribute. At times the alt text is
            a kind of punchline or second joke, with the alt text merely being a title. The site

            <a href="https://xkcd.fyi">https://xkcd.fyi</a> takes care to enhance the accessibility of the
            comic by creating a specific transcript.

            <br><br>

            Related, the RSS feed as rendered via Monocle, <a href="https://monocle.p3k.io/preview?url=https%3A%2F%2Fxkcd.com%2Fatom.xml">
                https://monocle.p3k.io/preview?url=https%3A%2F%2Fxkcd.com%2Fatom.xml
            </a> when reusing the content from the feed, displays the alt text underneath the image.

            <em>
                suggested by <a href="https:/gregorlover.com/">gRegor</a>
            </em>


        </li>

        <li>
            <a href="https://blindinstituteoftechnology.org">
                Blind Institute of Technology
            </a> does consulting on accessibility for digital assets and I was told at San Diego Comic-Con 2025 that they
            get grants to do a certain amount of that work.

        </li>



    </ul>


    <p>If you have a link you feel would be useful for others making accessible comics please comment below or reach out via any mechanism on my <a href="https://artlung.com/links/">links</a> page. Or leave a comment or code on GitHub (link below).</p>



</section>




<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);

