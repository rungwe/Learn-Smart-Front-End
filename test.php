<html>

	<head>
		<title> Testing Database</title>
	</head>
	<body>
	
	<p> Results of data database</p>
<?php

	$db = new mysqli("localhost","root","rungwe","data");
	
	if (mysql_connect_errno()==0){
	
		echo "<p> Connection successful thank you!! you are far to kind";
	}
	$query = "";
	
	
	
?>
	</body>
</html>