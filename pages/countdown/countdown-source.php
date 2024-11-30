<?php

$day = 31;                  // Day of the countdown
$month = 12;                // Month of the countdown
$year = date("Y");   // Year of the countdown
$hour = 23;                 // Hour of the day
$event = "New Year's Eve, " . date("Y"); //event

$calculation = ((mktime($hour, 0, 0, $month, $day, $year) - time()) / 3600);
$hours = (int)$calculation;
$days = (int)($hours / 24);

?><h2>Result:</h2>
<ul>
    <li>The date is <?php print (date("l, jS \of F Y g:i:s A")); ?>.</li>
    <li>It is <?php print $days ?> days until <?php print $event ?>.</li>
    <li>It is <?php print number_format($hours) ?> hours until <?php print $event ?>.</li>
</ul>