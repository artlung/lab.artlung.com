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
class GitHubLink
{


    const ISSUE_URL = "https://github.com/artlung/lab.artlung.com/issues/new";

    /**
     * Create a GitHub Issue URL from an array
     *
     * @param array $array
     *
     * @return string
     */
    public static function createIssueLink(array $array): string
    {
        return self::ISSUE_URL . "?" . self::_httpBuildQuery($array);
    }


    /**
     * Helper function to build a query string
     *
     * @param array{title: string, body: string,labels: string|array,milestone: string,assignees: string|array,projects: string,template: string,url: string } $array
     *
     * @return string
     */
    private static function _httpBuildQuery(array $array): string
    {

        //        title    https://github.com/octo-org/octo-repo/issues/new?labels=bug&title=New+bug+report creates an issue with the label "bug" and title "New bug report."
        //body    https://github.com/octo-org/octo-repo/issues/new?title=New+bug+report&body=Describe+the+problem. creates an issue with the title "New bug report" and the comment "Describe the problem" in the issue body.
        //labels    https://github.com/octo-org/octo-repo/issues/new?labels=help+wanted,bug creates an issue with the labels "help wanted" and "bug".
        //milestone    https://github.com/octo-org/octo-repo/issues/new?milestone=testing+milestones creates an issue with the milestone "testing milestones."
        //assignees    https://github.com/octo-org/octo-repo/issues/new?assignees=octocat creates an issue and assigns it to @octocat.
        //projects    https://github.com/octo-org/octo-repo/issues/new?title=Bug+fix&projects=octo-org/1 creates an issue with the title "Bug fix" and adds it to the organization's project 1.
        //template    https://github.com/octo-org/octo-repo/issues/new?template=issue_template.md creates an issue with a template in the issue body. The template query parameter works with templates stored in an ISSUE_TEMPLATE subdirectory within the root, docs/ or .github/ directory in a repository. For more information, see Using templates to encourage useful issues and pull requests.
        if (isset($array['labels']) && is_array($array['labels'])) {
            $array['labels'] = implode(',', $array['labels']);
        }

        // // https://docs.github.com/en/issues/tracking-your-work-with-issues/using-issues/creating-an-issue#creating-an-issue-from-a-url-query
        return http_build_query($array);
    }
}