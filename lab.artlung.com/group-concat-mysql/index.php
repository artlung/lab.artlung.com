<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
Using GROUP_CONCAT()
<?php include_once("../inc.header2of2.php"); ?>
<p align="right">Created September 2016, originally created January 2009.</p>

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

<?php include_once("../inc.footer.php"); ?>
