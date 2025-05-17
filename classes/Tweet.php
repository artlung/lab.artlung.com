<?php

namespace ArtlungLab;
/**
 * Class Tweet
 *
 * @category PHP
 * @package  Classes
 * @author   Joe Crawford <joe@artlung.com>
 * @license  GPL 2.0+ - https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version  Release: 1.0
 * @link     https://artlung.com/
 * @since    2024-12-03
 */
class Tweet
{

    public array $data;

    /**
     * Tweet constructor.
     *
     * @param array $array Array of tweet data
     *
     * @return void
     */
    public function __construct($array)
    {
        $this->data = $array['tweet'] ?? [];
    }

    /**
     * Get the HTML view of the tweet
     *
     * @return string
     */
    public function getHtml()
    {


        $full_text = $this->data['full_text'];
        $entities = $this->data['entities'];
        $replacements = [];

        $html_text = $full_text;

        foreach ($entities as $key => $entities_data) {

            if ($key === 'user_mentions') {
                foreach ($entities_data as $entities) {
                    $name = $entities['name']; // The Hedghog
                    $screen_name = $entities['screen_name']; // 'yomonk1'
                    $string_to_replace = '@' . $screen_name;
                    $username_link = 'https://twitter.com/' . strtolower($screen_name);
                    $html = sprintf('<a href="%s" rel="nofollow">%s</a>', $username_link, $string_to_replace);

                    $length = intval($entities['indices'][1]) - intval($entities['indices'][0]);
                    $string_location = substr($full_text, intval($entities['indices'][0]), $length);
                    $replacements[] = [
                        'search' => $string_location,
                        'replace' => $html,
                    ];
                }
            } elseif ($key === 'urls') {
                foreach ($entities_data as $entities) {
                    $expanded_url = $entities['expanded_url'];
                    $expanded_url_corrected = str_replace('http://', 'https://', $expanded_url);
                    $display_url = $entities['display_url'];


                    $length = intval($entities['indices'][1]) - intval($entities['indices'][0]);
                    $string_location = substr($full_text, intval($entities['indices'][0]), $length);
                    $html = sprintf("<a href='%s'>%s</a>", $expanded_url_corrected, $display_url);
                    $replacements[] = [
                        'search' => $string_location,
                        'replace' => $html,
                    ];
                }
            } elseif ($key === 'hashtags') {
                foreach ($entities_data as $entities) {
                    $string_to_replace = '#' . $entities['text'];
                    $hashtag_url = 'https://twitter.com/hashtag/' . strtolower($entities['text']);
                    $html = sprintf("<a href='%s' rel='nofollow'>%s</a>", $hashtag_url, $string_to_replace);
                    $length = intval($entities['indices'][1]) - intval($entities['indices'][0]);
                    $string_location = substr($full_text, intval($entities['indices'][0]), $length);
                    $replacements[] = [
                        'search' => $string_location,
                        'replace' => $html,
                    ];
                }
            } elseif ($key === 'symbols') {
                foreach ($entities_data as $entities) {
                    // what?

                }
            } else {
                print "unknown key: $key\n";
            }


        }
        $html_text = $full_text;
        foreach ($replacements as $replacement) {
            $html_text = str_replace($replacement['search'], $replacement['replace'], $html_text);
        }

        // dores the string have an http that's not inside a link or surrounded by a href=?
        $has_http_link = str_contains($html_text, ' http');
        if ($has_http_link) {
            $html_text = preg_replace('/ (https?:\/\/[^\s]+)/', ' <a href="$1" rel="nofollow">$1</a>', $html_text);
        }

        return $html_text;
    }

    /**
     * Get the date of the tweet
     *
     * @return string
     */
    public function getDate()
    {
        $time_zone_string = 'America/Los_Angeles';
        $created_at = $this->data['created_at'];
        $time = strtotime($created_at);
        $time_zone = new \DateTimeZone($time_zone_string);
        $date_time = new \DateTime($created_at, $time_zone);
        $adjusted_to_tz = $date_time->setTimezone(new \DateTimeZone($time_zone_string));
        return $adjusted_to_tz->format('l, F j, Y');
    }

    /**
     * Get the era of the tweet
     *
     * @return string
     */
    public function getEra()
    {
        if (preg_match('/200[8-9]|201[0-1]/', $this->data['created_at'])) {
            return 'respiratory therapy';
        }
        if (date('Y-m-d', strtotime($this->getDate())) === '2016-03-24') {
            return 'development';
        }
        // March 24, 2016
        return 'other';
    }

}