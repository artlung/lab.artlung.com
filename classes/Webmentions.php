<?php

namespace ArtlungLab;
/**
 * Class Webmention
 *
 * @category PHP
 * @package  Classes
 * @author   Joe Crawford <joe@artlung.com>
 * @license  GPL 2.0+ - https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version  Release: 1.0
 * @link     https://artlung.com/
 * @since    2024-12-03
 */
class Webmentions
{

    /**
     * Array of Mention objects
     *
     * @var array Mention[]
     */
    private $_mentions = [];


    /**
     * Webmention constructor.
     *
     * @param string $slug
     */
    public function __construct($slug)
    {
        $webmention_data = __DIR__ . '/../webmention_data/' . $slug . '.json';
        if (file_exists($webmention_data)) {
            $webmentions = json_decode(file_get_contents($webmention_data), true);
            foreach ($webmentions as $mention) {
                $this->_mentions[] = new Mention($mention);
            }
        } else {
            $this->_mentions = [];
        }
    }

    /**
     * Get the mentions
     *
     * @return array Mention[]
     */
    public function getMentions()
    {
        $webmentions = $this->_mentions;
        usort(
            $webmentions, function ($a, $b) {
                $a_date = $a->getWmReceived() ?? $a->getPublished();
                $b_date = $b->getWmReceived() ?? $b->getPublished();
                return strtotime($b_date) <=> strtotime($a_date);
            }
        );
        return $webmentions;
    }
}