<?php
require_once '../../loader.php';
$lab = new Lab();
$lab->printHeader(
    '
Countdown in to the first of the month in PHP
'
);

?>

    <p class="date-attribution">Created 08/2011</p>

    <h1>Countdown to a time of the day every day</h1>

    <p>For this question: </p>

    <blockquote>
        I'm looking to try and make this countdown to a time, say 5pm of each day. Is it possible with this?
    </blockquote>


    <h2>Result</h2>

<?php
/**
 * @param  $unixtime
 * @return false|string
 */
function formatTime($unixtime)
{
    return date("H:i:s", $unixtime);
}

/**
 * @param  $seconds
 * @return string
 */
function formatSeconds($seconds)
{
    $time = str_pad(intval(intval($seconds / 3600)), 2, "0", STR_PAD_LEFT) . ":"
        . str_pad(intval(($seconds / 60) % 60), 2, "0", STR_PAD_LEFT) . ":"
        . str_pad(intval($seconds % 60), 2, "0", STR_PAD_LEFT);
    return $time;
}

// explicitly set the timezone
date_default_timezone_set('America/Los_Angeles');
// set the hour according to the rules of strtotime()
$hour_in_english = "5pm";
$passed_message = "{$hour_in_english} has already passed today!";
$future_message = "Time until {$hour_in_english}: ";
$time_now = strtotime("now");
$time_hour = strtotime("today {$hour_in_english}");
$difference_in_seconds = $time_hour - $time_now;
// print $difference_in_seconds;
if ($difference_in_seconds < 0) {
    print $passed_message;
} else {
    print $future_message . formatSeconds($difference_in_seconds);
}
?>

    <h2>Source Code:</h2>
    <pre>
&lt;?php
function formatTime($unixtime) {
    return date("H:i:s", $unixtime);
}

function formatSeconds($seconds) {
    $time = str_pad(intval(intval($seconds/3600)),2,"0",STR_PAD_LEFT).":"
    . str_pad(intval(($seconds / 60) % 60),2,"0",STR_PAD_LEFT).":"
    . str_pad(intval($seconds % 60),2,"0",STR_PAD_LEFT) ;
    return $time;
}

// explicitly set the timezone
date_default_timezone_set('America/Los_Angeles');
// set the hour according to the rules of strtotime()
$hour_in_english = "5pm";
$passed_message = "{$hour_in_english} has already passed today!";
$future_message = "Time until {$hour_in_english}: ";
$time_now = strtotime("now");
$time_hour = strtotime("today {$hour_in_english}");
$difference_in_seconds = $time_hour - $time_now;
// print $difference_in_seconds;
if ($difference_in_seconds &lt; 0) {
    print $passed_message;
} else {
    print $future_message . formatSeconds($difference_in_seconds);
}?&gt;
</pre>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);


