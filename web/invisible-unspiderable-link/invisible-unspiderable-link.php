<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('Invisible, Unspiderable Link');

?>

    <p class="date-attribution">Originally from 2002. Updated with explanation 2024.</p>
    <h1 class="p-name">Invisible, Unspiderable Link</h1>


    <p style="font-family: monospace;max-width: 60ch;">
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
        diam nonummy nibh euismod tincidunt ut laoreet dolore magna
        aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
        nostrud exercitation ulliam corper suscipit lobortis nisl ut
        aliquip ex ea commodo consequat. Duis autem veleum iriure
        dolor in hendrerit in vulputate velit esse molestie consequat,
        vel willum lunombro dolore eu feugiat nulla facilisis at vero
        eros et accumsan et iusto odio dignissim qui blandit praesent
        luptatum zzril delenit augue duis dolore te feugait nulla
        facilisi.
        <br><br>
        Li Europan lingues es membres del sam familie. Lor separat
        existentie es un myth. Por <span onclick="document.location.href='https://artlung.com/';">scientie</span>,
        musica, sport etc., li
        tot Europa usa li sam vocabularium. Li lingues differe solmen
        in li grammatica, li pronunciation e li plu commun vocabules.
        Omnicos directe al desirabilit&aacute; de un nov lingua franca: on
        refusa continuar payar custosi traductores. It solmen va
        esser necessi far uniform grammatica, pronunciation e plu
        sommun paroles.
        <br><br>
        Ma quande lingues coalesce, li grammatica del resultant
        lingue es plu simplic e regulari quam ti del coalescent
        lingues. Li nov lingua franca va esser plu simplic e
        regulari quam li existent Europan lingues. It va esser tam
        simplic quam Occidental: in fact, it va esser Occidental.A un
        Angleso it va semblar un simplificat Angles, quam un skeptic
        Cambridge amico dit me que Occidental es.
    </p>

    <hr>

    <h2>Technique</h2>

    <p>
        The technique here is to hide a link in a span tag, and then use JavaScript to navigate to the link.
        It's not in a proper tag which refers to an external link, such as <code>&lt;a&gt;</code> or
        <code>&lt;link&gt;</code>.
        Search engines ought not recognize this sort of link.
        But it's a kind of privacy or security by obscurity. Any user may view the source of the page and see that
        there's additional code and a link.
        Spammers will sometimes append links to a page when they gain access to write to server files. And they can
        cover their tracks by encoding that source as gibberish, such as by encoding it so it doesn't look like tags and
        words.
    </p>

    <h2>Spoiler</h2>

    <p>
        <label class="spoiler">
            <input type="checkbox">
            <code>&lt;span onclick="document.location.href='https://artlung.com/';"&gt;scientie&lt;/span&gt;</code>
        </label>
    </p>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
