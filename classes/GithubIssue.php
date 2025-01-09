<?php

namespace ArtlungLab;
/**
 * Class GitHubLink
 *
 * @category PHP
 * @package  ArtLung
 * @author   Joe Crawford <joe@artlung.com>
 * @license  GPL 2.0+ - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version  Release: 1.0
 * @link     https://artlung.com/
 * @since    2024-12-03
 */
class GithubIssue
{

    const ISSUE_URL = "https://github.com/artlung/lab.artlung.com/issues/new";

    /**
     * Build a GitHub Issue URL from an array
     *
     * @param array{title: string, body: string,labels: string|array,milestone: string,assignees: string|array,projects: string,template: string,url: string } $options
     *
     * @return string
     * @throws \Exception
     * @see    https://docs.github.com/en/issues/tracking-your-work-with-issues/using-issues/creating-an-issue#creating-an-issue-from-a-url-query
     */
    public static function getLink(array $options): string
    {

        return self::ISSUE_URL . "?" . self::_httpBuildQuery($options);
    }


    /**
     * Build a query string from an array
     *
     * @param array{title: string, body: string,labels: string|array,milestone: string,assignees: string|array,projects: string,template: string,url: string } $array
     *
     * @return string
     * @throws \Exception
     * @see    https://docs.github.com/en/issues/tracking-your-work-with-issues/using-issues/creating-an-issue#creating-an-issue-from-a-url-query
     */
    private static function _httpBuildQuery(array $array): string
    {
        $allowed_params_and_types = [
            'title' => 'string',
            'body' => 'string',
            'labels' => ['string', 'array'],
            'milestone' => 'string',
            'assignees' => ['string', 'array'],
            'projects' => 'string',
            'template' => 'string',
            'url' => 'string',
        ];

        if (array_key_exists('url', $array)) {
            $array['body'] .= "\n\n" . $array['url'];
        }


        foreach ($array as $key => $value) {
            if (!array_key_exists($key, $allowed_params_and_types)) {
                throw new \Exception("Invalid key: $key");
            }
            $type = $allowed_params_and_types[$key];
            if (is_array($type)) {
                if (!in_array(gettype($value), $type)) {
                    throw new \Exception("Invalid type for $key");
                }
                if (gettype($value) === 'array') {
                    $array[$key] = implode(',', $value);
                }
            } else {
                if (gettype($value) !== $type) {
                    throw new \Exception("Invalid type for $key");
                }
            }
        }


        // // https://docs.github.com/en/issues/tracking-your-work-with-issues/using-issues/creating-an-issue#creating-an-issue-from-a-url-query
        return http_build_query($array);
    }
}