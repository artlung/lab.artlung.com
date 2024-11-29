</title>
<?php
	if(is_file("code.txt"))
	{
		print file_get_contents("code.txt");
	}
?>
</head>
<body id="<?php print md5($_SERVER['SCRIPT_NAME'])?>">
<?php


?>
<div id="everything">
<div id="header">
    <a href="/">ARTLUNG LAB</a>
    <span>Experimenting since 1996</span>
    <a href="https://artlung.com/links/" class="joe" target="_blank">Joe</a>
</div>
<div id="content">
