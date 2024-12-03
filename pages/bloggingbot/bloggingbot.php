<?php
$rand = rand(0, 9999); // there are 10,000 sentences in the file
$sentences = file("sample_sentences.txt");
$line = $sentences[$rand];

if (isset($_GET['bloggingbot'])) {
    $defined = $_GET['bloggingbot'];
    // must be numeric and from 0 to 9999
    if (is_numeric($defined) && $defined >= 0 && $defined <= 9999) {
        $line = $sentences[$defined];
        $rand = $defined;
    }
}
?>
<!DOCTYPE html>
<html
<head>
    <title><?php print $line; ?></title>
    <?php printf("<script>var itemId = %s;console.log(%s)</script>\n", $rand, $rand); ?>
    <script>
        // pushstate the url /bloggingbot/ + itemId
        // so that the url is bookmarkable
        // and so that the back button works
        // https://developer.mozilla.org/en-US/docs/Web/API/History_API
        // https://developer.mozilla.org/en-US/docs/Web/API/History_API/Working_with_the_History_API
        // https://developer.mozilla.org/en-US/docs/Web/API/History_API/Example

        function pushState(itemId) {
            var url = '/bloggingbot/' + itemId;
            history.pushState({itemId: itemId}, '', url);
        }

        // run it onload
        window.addEventListener('load', function () {
            pushState(itemId);
        });
    </script>
    <style>
        html {
            height: 100%;
        }

        body {
            color: #666;
            background-color: #000;
            font-family: sans-serif;
            text-align: left;
            font-size: 9vh;
            margin: 0;
            padding: 0;
            display: grid;
            height: 100%;
            grid-template-rows: 75% 1fr min-content;

        }

        div {
            padding: 1vw;
        }

        a {
            font-size: 0.7em;
            display: block;
            font-style: italic;
            color: #666;
            text-decoration: none;
            margin-top: 2vh;
            padding: 0 1vw;
            text-align: right;
        }

        a.button {
            display: block;
            text-decoration: none;
            background: #000;
            color: #fff;
            padding: 1vw;
            text-align: end;
        }

        a.button:first-child {
            text-align: start;
        }

        section {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

    </style>
    <script>
        function randomWebColor() {
            var number_of_colors = 0xffffff;
            var num = Math.round(Math.random() * number_of_colors);
            return ('#0' + num.toString(16)).replace(/^#0([0-9a-f]{6})$/i, '#$1');
        }

        function foregroundColorFromWebColor(color) {
            // #RRGGBB
            // 0123456
            var bg = {
                R: parseInt(color.substr(1, 2), 16),
                G: parseInt(color.substr(3, 2), 16),
                B: parseInt(color.substr(5, 2), 16)
            };
            var nThreshold = 105;
            var bgDelta = ((bg.R * 0.299) + (bg.G * 0.587) + (bg.B * 0.114));
            return (255 - bgDelta < nThreshold) ? '#000000' : '#ffffff';
        }

        var lastExecution = 0;

        function changeColors() {
            if (Date.now() - lastExecution > 1000) {
                var color = randomWebColor();
                document.body.style.backgroundColor = color;
                document.body.style.color = foregroundColorFromWebColor(color);
                document.getElementsByTagName('a')[0].style.color = foregroundColorFromWebColor(color);
                lastExecution = Date.now();
            } else {

            }
        }

        window.addEventListener('load', function () {
            document.getElementsByTagName('div')[0].addEventListener('mousemove', changeColors);
            document.getElementsByTagName('div')[0].addEventListener('click', changeColors);
        });

    </script>
</head>
<body style="background-color: rgb(36, 100, 126); color: rgb(255, 255, 255);">
<div><?php echo $line; ?></div>
<a href="https://artlung.com/blog/2018/02/23/markov-chains-are-hilarious/"
   style="color: rgb(255, 255, 255);"
   target="_blank"
   title="Markov Chains are Hilarious!"
>about</a>

<section>
    <a href="/" class="button" title="go to lab.artlung.com">lab.artlung.com</a>
    <a href="/bloggingbot/" class="button" title="load another random Markov chain based on artlung.com">random++</a>
</section>

</body></html>