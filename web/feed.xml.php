<?php
require __DIR__ . '/../loader.php';

date_default_timezone_set('UTC');

use ArtlungLab\Nav;
use FeedWriter\ATOM;

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

$all_items = Nav::getMetadata();

$items_with_atom_feed_publish_date = array_filter(
    $all_items, function ($item) {
        return isset($item['atom_feed_publish_date']) && isset($item['og-image-date'])
        && $item['atom_feed_publish_date'] && $item['og-image-date'];
    }
);

// retain the keys
$items_with_atom_feed_publish_date = array_filter(
    $items_with_atom_feed_publish_date, function ($item) {
        return isset($item['atom_feed_publish_date']) && isset($item['og-image-date'])
        && $item['atom_feed_publish_date'] && $item['og-image-date'];
    }
);


foreach ($items_with_atom_feed_publish_date as $slug => $metadata) {
    $newItem = $feed->createNewItem();

    $ogImagePath = "$slug/og-$slug.jpg";
    $link = $metadata['canonical_url'];
    $ogWebPath = "https://lab.artlung.com/$slug/og-$slug.jpg";
    $title = $metadata['title'] ?? false;
    $date = $metadata['atom_feed_publish_date'];
    $contentHtml = sprintf(
        '<a href="%s"><img src="%s" alt="%s" /></a>',
        $link,
        $ogWebPath,
        htmlentities($title)
    );
    $newItem->setTitle($title);
    $newItem->setLink($link);
    $newItem->setDate($date);
    $authors = [];
    if (array_key_exists('author', $metadata)) {
        $authors[] = $metadata['author'];
    } else if (array_key_exists('multiple_authors', $metadata)) {
        foreach ($metadata['multiple_authors'] as $author) {
            $authors[] = $author;
        }
    } else {
        $authors[] = $default_author;
    }
    foreach ($authors as $author) {
        $authorContent = '';
        // serialize $author as <$tagName>$content</$tagName>
        foreach ($author as $tagName => $tagContent) {
            $authorContent .= "<$tagName>$tagContent</$tagName>";
        }
        $newElement = $newItem->addElement('author', $author, null, false, true);
    }
    $newItem->setContent($contentHtml);
    $feed->addItem($newItem);
}
$feed->printFeed();
