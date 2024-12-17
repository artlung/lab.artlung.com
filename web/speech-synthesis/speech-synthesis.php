<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader(
    '
Speech Synthesis API
'
);

?>

    <h1>window.SpeechSynthesis</h1>

    <p>
        Your browser probably has speech synthesis built in. In 1980 this was an <a
                href="https://en.wikipedia.org/wiki/TI-99/4A#:~:text=A%20plug%2Din%20speech%20synthesizer,player%20makes%20a%20bad%20move.">add-on
            hardware device</a> for a TI-99/4A computer.
    </p>

    <h2>Code</h2>

    <pre>window.speechSynthesis.speak(new SpeechSynthesisUtterance("hello")) <button
                onclick="window.speechSynthesis.speak(new SpeechSynthesisUtterance('hello')); return false"><strong>say "hello"</strong></button></pre>

    <h2>Enter text below</h2>
    <form style="display: grid;grid-template-columns: 8fr 2fr">
        <textarea style="width: 80vw;height: 20vh;font-size: 1.5em;padding: 10px;box-sizing: border-box;"></textarea>
        <button
                onclick="window.speechSynthesis.speak(new SpeechSynthesisUtterance(this.form.elements[0].value)); return false">
            Speak
        </button>
    </form>

    <h2>Resources</h2>
    <ul>
        <li>
            <a href="https://developer.mozilla.org/en-US/docs/Web/API/SpeechSynthesis">MDN: SpeechSynthesis</a>
        </li>


    </ul>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);



