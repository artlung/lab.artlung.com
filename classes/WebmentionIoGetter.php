<?php

namespace ArtlungLab;
/**
 * Class WebmentionIoGetter
 *
 * @category PHP
 * @package  Classes
 * @author   Joe Crawford <joe@artlung.com>
 * @license  GPL 2.0+ - https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version  Release: 1.0
 * @link     https://artlung.com/
 * @since    2024-12-03
 */
class WebmentionIoGetter
{
    const WEBMENTION_LAST_CHECKED_KEY = 'webmention_last_checked';
    const WEBMENTION_COUNT_KEY = 'webmention_count';

    /**
     * Get webmentions for a URL
     *
     * @param string $url URL to get webmentions for
     *
     * @return array
     */
    public static function getWebmentions($url): array
    {
        $webmentionio_url = "https://webmention.io/api/mentions.jf2?target=$url";
        $webmentionio_response = file_get_contents($webmentionio_url);
        $webmentionio_data = json_decode($webmentionio_response, true);
        return $webmentionio_data;
    }

    /**
     * Get webmentions for a page
     *
     * @param string $url URL to get webmentions for
     *
     * @return array
     */
    public static function getWebmentionsForPage($url): array
    {
        $webmentionio_data = self::getWebmentions($url);
        $webmentions = $webmentionio_data['children'] ?? [];
        return $webmentions;
    }

    /**
     * Get and stash webmentions
     *
     * @param string $slug Slug
     * @param string $url  URL
     *
     * @return int
     */
    public static function getAndStashWebmentions(string $slug, string $url): bool
    {
        $webmentions = self::getWebmentionsForPage($url);
        $webmentions_json = json_encode($webmentions);
        $webmentions_file = __DIR__ . "/../webmention_data/$slug.json";
        $worked = file_put_contents($webmentions_file, $webmentions_json);
        return (bool) $worked;
    }



}