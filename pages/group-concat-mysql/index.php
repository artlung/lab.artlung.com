<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('
Using GROUP_CONCAT()
');

?>
<p class="date-attribution">Created September 2016, originally created January 2009.</p>

<h2>
Using GROUP_CONCAT()
</h2>

<p>This was a breakthrough for me when I discovered <a href="http://dev.mysql.com/doc/refman/5.7/en/group-by-functions.html#function_group-concat">GROUP_CONCAT()</a> back in 2009. I wish I could remember the project better.</p>

<pre>
SELECT          email                                                                  AS `email` ,
                group_concat( DISTINCT group_name ORDER BY group_name separator ', ' ) AS `groups` ,
                count(votes.id)                                                        AS `# votes`
FROM            users_and_groups , 
                users 
LEFT OUTER JOIN votes 
ON              users.id = votes.user_id 
WHERE           users_and_groups.user_id = users.id 
GROUP BY        users_and_groups.user_id 
ORDER BY        is_admin DESC , 
                groups , 
                email ASC</pre>

<?php
$lab->printFooter([
	'comments' => true
]);
