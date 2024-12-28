<?php
require '../loader.php';

date_default_timezone_set('UTC');

use \FeedWriter\ATOM;

$feed = new ATOM();

$default_author = [
    'name' => 'Joe Crawford',
    'email' => 'joe@artlung.com',
    'uri' => 'https://artlung.com',
];


$feed->setTitle('ArtLung Lab');
$feed->setDescription('Making web pages is fun!');
$feed->setAtomLink('https://lab.artlung.com/feed.xml');
$feed->setChannelElement('updated', date(DATE_ATOM));
$feed->setChannelElement('author', $default_author);

//You can add additional link elements, e.g. to a PubSubHubbub server with custom relations.
$feed->setSelfLink('https://lab.artlung.com/feed.xml');

$all_items = \ArtlungLab\Nav::getMetadata();

$items_with_atom_feed_publish_date = array_filter(
    $all_items, function ($item) {
        return isset($item['atom_feed_publish_date']) && isset($item['og-image-date'])
        && $item['atom_feed_publish_date'] && $item['og-image-date'];;
    }
);

//usort(
//    $items_with_atom_feed_publish_date, function ($a, $b) {
//        return $a['atom_feed_publish_date'] <=> $b['atom_feed_publish_date'];
//    }
//);

// retain the keys
$items_with_atom_feed_publish_date = array_filter(
    $items_with_atom_feed_publish_date, function ($item) {
        return isset($item['atom_feed_publish_date']) && isset($item['og-image-date'])
        && $item['atom_feed_publish_date'] && $item['og-image-date'];;
    }
);


foreach ($items_with_atom_feed_publish_date as $slug => $metadata) {
    $newItem = $feed->createNewItem();

    $ogImagePath = "$slug/og-$slug.jpg";
    $link = $metadata['canonical_url'];
    $ogWebPath = "https://lab.artlung.com/$slug/og-$slug.jpg";
        $title = $metadata['title'] ?? false;
        $date = $metadata['atom_feed_publish_date'];
        $contentHtml = "<a href='$link'><img src='$ogWebPath' alt='$title' /></a>";
        $newItem->setTitle($title);
        $newItem->setLink($link);
        $newItem->setDate($date);
        $author = $metadata['author'] ?? $default_author;
        $newItem->setAuthor($author['name'] ?? '', $author['email'] ?? '', $author['uri'] ?? '');
        //        $newItem->setDescription($description);
        $newItem->setContent($contentHtml);
        $feed->addItem($newItem);
}
$feed->printFeed();
