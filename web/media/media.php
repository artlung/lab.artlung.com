<?php

require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('What to do with a directory of images that are letters?');

?>
    <p class="date-attribution">Directory is from 1999, Added code December 2024</p>
    <h1>What to do with a directory of images that are letters?</h1>

    <p>I'm not sure when I added the directory of letters on this site. But who doesn't love a little thing to type into
        and see something come out of it? I know I do. It reminds me of a Hangman game I made a long time ago, but I'm
        not sure these are the same GIF files. Anyway, feel free to type something. But only the letters A-Z and a
        space. Anything else will be ignored.
    </p>

<?php ob_start(); ?>

    <input type="text" id="letter-typer" placeholder="Start typing">
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const letterTyper = document.getElementById('letter-typer');
            const output = document.getElementById('letter-output');

            letterTyper.addEventListener('input', function () {
                const value = letterTyper.value;
                const letters = value.toLowerCase().split('');
                var letterMapping = {
                    ' ': 'letters/letter__.gif',
                    'a': 'letters/letter_a.gif',
                    'b': 'letters/letter_b.gif',
                    'c': 'letters/letter_c.gif',
                    'd': 'letters/letter_d.gif',
                    'e': 'letters/letter_e.gif',
                    'f': 'letters/letter_f.gif',
                    'g': 'letters/letter_g.gif',
                    'h': 'letters/letter_h.gif',
                    'i': 'letters/letter_i.gif',
                    'j': 'letters/letter_j.gif',
                    'k': 'letters/letter_k.gif',
                    'l': 'letters/letter_l.gif',
                    'm': 'letters/letter_m.gif',
                    'n': 'letters/letter_n.gif',
                    'o': 'letters/letter_o.gif',
                    'p': 'letters/letter_p.gif',
                    'q': 'letters/letter_q.gif',
                    'r': 'letters/letter_r.gif',
                    's': 'letters/letter_s.gif',
                    't': 'letters/letter_t.gif',
                    'u': 'letters/letter_u.gif',
                    'v': 'letters/letter_v.gif',
                    'w': 'letters/letter_w.gif',
                    'x': 'letters/letter_x.gif',
                    'y': 'letters/letter_y.gif',
                    'z': 'letters/letter_z.gif'
                };
                var html = '';
                letters.forEach(function (letter) {
                    if (!letterMapping[letter]) {
                        return;
                    }
                    html += `<img src="${letterMapping[letter]}" alt="${letter}">`;
                });

                output.innerHTML = html;
            });
        });
    </script>
    <div id="letter-output"></div>

<?php
$html = ob_get_clean();
print $html;
?>

    <h2>Code</h2>
<?php $lab->printCodeBlock($html); ?>

    <h2>SCSS</h2>
<?php $lab->printSourceFile('media.scss'); ?>

    <link rel="stylesheet" href="media.css<?php
    echo '?' . filemtime('media.css');
    ?>">

<?php
$lab->printFooter(
    [
        'comments' => true,
    ]
);