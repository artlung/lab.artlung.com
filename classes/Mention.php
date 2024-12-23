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
     * Catch-all for the decoded json data, see unit tests to  see what data is always there
     * As new mentions come in need to make sure these always work
     *
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
    private $_data;
    //    type, author, url, published, wm-received, wm-id, wm-source, wm-target, wm-protocol, content, mention-of, wm-property, wm-private, rels
    /**
     * Mention constructor.
     *
     * @param array $data
     */
    public function __construct($data)
    {
        $this->_data = $data;
    }
    /**
     * Get the data
     *
     * @return array
     */
    public function getData()
    {
        return $this->_data;
    }

    /**
     * Get the photo of the author
     *
     * @return string
     */
    public function getAuthorPhoto()
    {
        return $this->_data['author']['photo'] ?? '';
    }

    /**
     * Get the name of the author
     *
     * @return string
     */
    public function getAuthorName()
    {
        return $this->_data['author']['name'] ?? '';
    }

    /**
     * Get the URL of the mention
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->_data['url'] ?? '';
    }

    /**
     * Get the int of the wm-received date
     *
     * @return string
     */
    public function getWmReceived()
    {
        return $this->_data['wm-received'] ?? '';
    }

    /**
     * Get the int of the published date
     *
     * @return string
     */
    public function getPublished()
    {
        return $this->_data['published'] ?? '';
    }


}