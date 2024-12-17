<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('Changing the spacing between paragraphs');

?>

    <p class="date-attribution">
        Created
        February 2006
    </p>

    <h1>Changing the spacing between paragraphs</h1>

    <div id="narrowerDiv">

        <p>This text has a default Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
            diam nonummy nibh euismod tincidunt ut laoreet dolore magna
            aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
            nostrud exercitation ulliam corper suscipit lobortis nisl ut
            aliquip ex ea commodo consequat. Duis autem veleum iriure
            dolor in hendrerit in vulputate velit esse molestie consequat,
            vel willum lunombro dolore eu feugiat nulla facilisis at vero
            eros et accumsan et iusto odio dignissim qui blandit praesent
            luptatum zzril delenit augue duis dolore te feugait nulla
            facilisi.</p>

        <p>Li Europan lingues es membres del sam familie. Lor separat
            existentie es un myth. Por scientie, musica, sport etc., li
            tot Europa usa li sam vocabularium. Li lingues differe solmen
            in li grammatica, li pronunciation e li plu commun vocabules.
            Omnicos directe al desirabilit&eacute; de un nov lingua franca: on
            refusa continuar payar custosi traductores. It solmen va
            esser necessi far uniform grammatica, pronunciation e plu
            sommun paroles.</p>

        <p>Ma quande lingues coalesce, li grammatica del resultant
            lingue es plu simplic e regulari quam ti del coalescent
            lingues. Li nov lingua franca va esser plu simplic e
            regulari quam li existent Europan lingues. It va esser tam
            simplic quam Occidental: in fact, it va esser Occidental.A un
            Angleso it va semblar un simplificat Angles, quam un skeptic
            Cambridge amico dit me que Occidental es.</p>

        <h2>These paragraphs have a class of "differentSpacing"</h2>

        <p class="differentSpacing">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
            diam nonummy nibh euismod tincidunt ut laoreet dolore magna
            aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
            nostrud exercitation ulliam corper suscipit lobortis nisl ut
            aliquip ex ea commodo consequat. Duis autem veleum iriure
            dolor in hendrerit in vulputate velit esse molestie consequat,
            vel willum lunombro dolore eu feugiat nulla facilisis at vero
            eros et accumsan et iusto odio dignissim qui blandit praesent
            luptatum zzril delenit augue duis dolore te feugait nulla
            facilisi.</p>


        <p class="differentSpacing">Li Europan lingues es membres del sam familie. Lor separat
            existentie es un myth. Por scientie, musica, sport etc., li
            tot Europa usa li sam vocabularium. Li lingues differe solmen
            in li grammatica, li pronunciation e li plu commun vocabules.
            Omnicos directe al desirabilit&eacute; de un nov lingua franca: on
            refusa continuar payar custosi traductores. It solmen va
            esser necessi far uniform grammatica, pronunciation e plu
            sommun paroles.</p>

        <p class="differentSpacing">Ma quande lingues coalesce, li grammatica del resultant
            lingue es plu simplic e regulari quam ti del coalescent
            lingues. Li nov lingua franca va esser plu simplic e
            regulari quam li existent Europan lingues. It va esser tam
            simplic quam Occidental: in fact, it va esser Occidental.A un
            Angleso it va semblar un simplificat Angles, quam un skeptic
            Cambridge amico dit me que Occidental es.</p>

    </div>

    <p>The only change in this code is related to margins. <code>line-height</code> would be another thing to affect the
        typography.</code></p>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
