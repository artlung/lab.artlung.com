<?php

use ArtlungLab\SiteMap;

require_once '../loader.php';

$items = \ArtlungLab\Nav::getMetadata();
foreach ($items as $slug => $metadata) {
    $urls[] = $metadata['canonical_url'];
}
$check_for_subdirectories_in = [];
// TODO create mechanism to spelunk sub pages, e.g. ArtLung-Notes, java_tags

$sm = new SiteMap($urls);
$sm->setDomain('lab.artlung.com');
// maybe use og-image-date or webmention_last_checked ?
$sm->setDefaultFilectime(filectime('index.php'));
$sm->output();