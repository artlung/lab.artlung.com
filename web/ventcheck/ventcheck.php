<?php

use ArtlungLab\Tweet;

require_once __DIR__ . '/../../loader.php';


$lab = new ArtlungLab\Lab();
$lab->printHeader('Ventcheck');

?>

<p class="date-attribution">Created March 2016</p>

<h1>
    Ventcheck
</h1>

<?php

$tweet_file = __DIR__ . '/ventcheck.json';
$tweet_data = json_decode(file_get_contents($tweet_file), true);

$final_tweets = [];
foreach ($tweet_data as $tweet) {
    $tweet = new Tweet($tweet);
    $final_tweets[] = [
        'html' => $tweet->getHtml(),
        'date' => $tweet->getDate(),
        'era' => $tweet->getEra(),
    ];
}
// sort by date asc
usort(
    $final_tweets, function ($a, $b) {
        return strtotime($a['date']) - strtotime($b['date']);
    }
);


?>
<p>
    A "vent check" is something a respiratory therapist does as part of their job.
    We check and document the ventilator settings, the humidifier, the oxygen level,
    we check on the patient and their current condition.
</p>

<h2>Respiratory Therapy Era <small><em>2009-2011</em></small></h2>

<p>
    In 2009 I wanted to create a Twitter account to associated with my website
    for respiratory therapy: <a href="https://rhonchi.com/">Rhonchi</a>. I called the bot "ventcheck."
</p>

<?php

print "<ul>";
foreach ($final_tweets as $tweet) {
    if ($tweet['era'] === 'respiratory therapy') {
        printf("<li>%s <small>%s</small></li>", $tweet['html'], $tweet['date']);
    }

}
print "</ul>";

?>
    <h2>Make Your Own Twitterbot <small><em>March 24, 2016</em></small></h2>

<p>I attended San Diego Code Kitchen's
  kickoff meeting: <em>"Make Your Own Twitterbot"</em>.
    Blog posts about it:
    <a href="https://artlung.com/blog/2016/09/15/ventcheck/">[1]</a>
    <a href="https://artlung.com/blog/2018/01/27/ventcheck-a-twitter-bot-i-wrote-in-2016/">[2]</a>.
    These
    tweets were during the meeting!
</p>

<?php

print "<ul>";
foreach ($final_tweets as $tweet) {
    if ($tweet['era'] === 'development') {
        printf("<li>%s <small>%s</small></li>", $tweet['html'], $tweet['date']);
    }

}
print "</ul>";

?>

    <h2>Main Section <small><em>2016 to 2020</em></small></h2>

<p>
    I used cheapbotsdonequick (RIP) to run it since then until I shut it down in 2020. This predates the
    sale of Twitter to Elon Musk by a few years.
</p>
<?php

print "<ul>";
foreach ($final_tweets as $tweet) {
    if ($tweet['era'] === 'other') {
        printf("<li>%s <small>%s</small></li>", $tweet['html'], $tweet['date']);
    }

}
print "</ul>";

?>


<?php



$lab->printFooter(
    [
        'comments' => true
    ]
);
