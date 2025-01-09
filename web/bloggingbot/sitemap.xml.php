<?php

use ArtlungLab\SiteMap;

require_once '../../loader.php';


$numbers = range(1, 10000);
$urls = [];
foreach ($numbers as $number) {
    $urls[] = "/bloggingbot/$number";
}
$sm = new SiteMap($urls);
$sm->setDomain('lab.artlung.com');
$sm->setDefaultFilectime(filectime('bloggingbot.php'));
$sm->setPriority(0.2);
$sm->output();
