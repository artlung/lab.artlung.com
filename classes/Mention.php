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
class Mention
{
    /**
     * @var array{
     *     type: string,
     *     author: string,
     *     url: string,
     *     published: string,
     *     wm-received: string,
     *     wm-id: string,
     *     wm-source: string,
     *     wm-target: string,
     *     wm-protocol: string,
     *     content: string,
     *     mention-of: string,
     *     wm-property: string,
     *     wm-private: string,
     *     rels: string
     * }
     */
    private $data;
    //    type, author, url, published, wm-received, wm-id, wm-source, wm-target, wm-protocol, content, mention-of, wm-property, wm-private, rels
    /**
     * Mention constructor.
     *
     * @param array $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
    }

    public function getAuthorPhoto()
    {
        return $this->data['author']['photo'] ?? '';
    }

    public function getAuthorName()
    {
        return $this->data['author']['name'] ?? '';
    }

    public function getUrl()
    {
        return $this->data['url'] ?? '';
    }

    public function getWmReceived()
    {
        return $this->data['wm-received'] ?? '';
    }

    public function getPublished()
    {
        return $this->data['published'] ?? '';
    }


}