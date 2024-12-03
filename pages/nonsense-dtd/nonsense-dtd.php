<?php
$nonsense_doctype = '<!DOCTYPE html PUBLIC "nonsense" "http://example.org/nonsense">';
print $nonsense_doctype;
require_once __DIR__ . '/../../loader.php';
$lab = new Lab();
$lab->printHeader('What\'s the document.doctype of a document with a nonsense DTD');
?>

<h1>What's the document.doctype of a document with a nonsense DTD?</h1>

<?php
$lab->printCodeBlock($nonsense_doctype);
?>

<h2>Resulting document.doctype.publicId and systemId</h2>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        console.log('DOM fully loaded and parsed');
        console.log(document.doctype);
        let obj = {};

        obj['document.doctype.publicId'] = document.doctype.publicId;
        obj['document.doctype.systemId'] = document.doctype.systemId;

        //create a dl, and append it to the body
        let dl = document.createElement('dl');
        // append dt and dd to the dl
        for (const [key, value] of Object.entries(obj)) {
            let dt = document.createElement('dt');
            dt.textContent = key;
            let dd = document.createElement('dd');
            dd.textContent = value;
            dl.appendChild(dt);
            dl.appendChild(dd);
        }
        document.getElementById('content').appendChild(dl);

    });
</script>


<?php
$lab->printFooter(
    ['comments' => true]
);