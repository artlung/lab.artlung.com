<?php

namespace ArtlungLab;
use JShrink\Minifier;

/**
 * Class Bookmarklet
 *
 * @category PHP
 * @package  ArtLung
 * @author   Joe Crawford <joe@artlung.com>
 * @license  GPL 2.0+ - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version  Release: 1.0
 * @link     https://artlung.com/
 * @since    2024-12-03
 */
class Bookmarklet
{
    /**
     * Render JS to a bookmarklet
     *
     * @param string $js The JavaScript to convert to a bookmarklet
     *
     * @throws \Exception
     *
     * @return string
     */
    public static function javascriptToBookmarklet($js): string
    {
        $minifiedCode = rawurlencode(Minifier::minify($js));
        return $minifiedCode;
    }

}