<meta charset="utf-8">
<?php

    include '../contact/dbconnection.php';
    $connect=dbconn();

	mysql_query("SET session character_set_client = 'UTF8'");
	mysql_query("SET session character_set_connection = 'UTF8'");
	mysql_query("SET session character_set_results = 'UTF8'");
	mysql_query("SET session character_set_server = 'UTF8'");

    $userName=$_GET['name'];
    $userEmail=$_GET['email'];
    $userComment=$_GET['comment'];

	$userName = urldecode($userName);
	$userEmail = urldecode($userEmail);
	$userComment = urldecode($userComment);

	$query="INSERT into contact(name, email, comment) values('$userName','$userEmail','$userComment')";
    mysql_query($query, $connect);
	
	echo "<script>alert('Send Successful');location.href = '../contact/'</script>"
	
 ?>