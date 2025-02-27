<?php

class GitHubLink
{


    const ISSUE_URL = "https://github.com/artlung/lab.artlung.com/issues/new";

    public static function createIssueLink(array $array): string
    {
        return self::ISSUE_URL . "?" . self::http_build_query($array);
    }


    /**
     * @param  array $array{
     * @type   string $title
     * @type   string $body
     * @type   string $labels
     * @type   string $milestone
     * @type   string|array $assignees
     * @type   string $projects
     * @type   string $template
     * }
     * @return string
     */
    private static function http_build_query(array $array): string
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