<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('Compare Two URLs');
?>

    <p class="date-attribution">Created 2015. Updated 2024.</p>
<?php ob_start(); ?>
    <!-- load latest knockoutjs from cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.5.1/knockout-latest.js"
            integrity="sha512-2AL/VEauKkZqQU9BHgnv48OhXcJPx9vdzxN1JrKDVc4FPU/MEE/BZ6d9l0mP7VmvLsjtYwqiYQpDskK9dG8KBA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <h1>Compare Two URLs</h1>
    <p>
        Useful for debugging RESTful interfaces. <em>Originally built when working on upgrade and account management
            flows with complicated parameter variations.</em>
        Originally written for Knockout 3.3.0. No changes were required to update to Knockout 3.5.1. URL data is stored
        locally in your browser. No data is sent or retained by the server.
    </p>
    <div class="url-compare">
        <div class="row">
            <div data-bind="with: url_1">
                <textarea class="form-control" data-bind="textInput: url" rows="2" id="url_1"></textarea>
            </div>
            <div data-bind="with: url_2">
                <textarea class="form-control" data-bind="textInput: url" rows="2" id="url_2"></textarea>
            </div>
        </div>
        <div class="row">
            <table>
                <thead>
                <tr>
                    <th colspan="4">
                        URL Parts and QueryString Parameters
                    </th>
                </tr>
                <tr>
                    <th>
                        Key1
                    </th>
                    <th>
                        Value1
                    </th>
                    <th>
                        Key2
                    </th>
                    <th>
                        Value2
                    </th>
                </tr>
                </thead>
                <tbody data-bind="foreach: matrix">
                <tr data-bind="css: {success: valuesEqual(), warning: keysBothPresent() &amp;&amp; !valuesEqual() &amp;&amp; !hasDoubleValue(), info: !valuesBothPresent(), danger: hasDoubleValue}">
                    <td data-bind="text: key1"></td>
                    <td data-bind="foreach: value1">
                        <div>
                            <b data-bind="html: val"></b>
                        </div>
                    </td>
                    <td data-bind="text: key2"></td>
                    <td data-bind="foreach: value2">
                        <div>
                            <b data-bind="html: val"></b>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php $html = ob_get_clean(); ?>
<?php print $html; ?>
    <link rel='stylesheet prefetch' href='url-compare.css<?php
    echo '?v=' . filemtime('url-compare.css');
    ?>'>

    <script src="url-compare.js<?php
    echo '?v=' . filemtime('url-compare.js');
    ?>"></script>
    <p class="about">
        A client-side <a href="https://knockoutjs.com">KnockoutJS</a> application which can compare two urls, including
        their url parameters.
        <button onclick="sampleData();">Load Sample URLs</button>
        <button onclick="clearData();">Clear Data</button>
    </p>

    <script>
        function sampleData() {
            APP.url_1.url("https://store.dev.sdslacker.com/store/api/UpgradeOffers5.do?account=1428160&ods=true&msisdn=8587227741&api=embedded&client=android&site=slacker&style=v6&abtemplate=b&nikSays=html&ods=true")
            APP.url_2.url("http://store.pubstg.sdslacker.com/store/api/UpgradeOffers5.do?nettype=lte&deviceid=358582051786924&nettype_int=13&source=my_music_onboarding&entry-page=premium&account=5942945&ods=true&partner=AT%26T&msisdn=18586839139&api=embedded&client=android&site=slacker&style=v6&retry-ota=true&nikSays=html")
        }

        function clearData() {
            APP.url_1.url("")
            APP.url_2.url("")
        }
    </script>


    <hr>

    <h2>HTML SOURCE</h2>

    <pre><code><?php
            print htmlentities($html);
    ?></code></pre>

    <h2>JavaScript Source</h2>

<?php $lab->printCodeBlock(file_get_contents('url-compare.js')); ?>

    <h2>SCSS Source</h2>

<?php $lab->printCodeBlock(file_get_contents('url-compare.scss')); ?>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
