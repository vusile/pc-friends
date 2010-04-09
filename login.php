<?php

include "connection.php";

session_start();

$user = $_POST['uname'];
$pass = $_POST['pass'];

$user = stripslashes($user);
$pass = stripslashes($pass);
$user = mysql_real_escape_string($user);
$pass = mysql_real_escape_string($pass);

$query = "select * from user where name = '$user' and pass = sha1('$pass')";

$resset = mysql_query($query);

$count = mysql_num_rows($resset);

if ($count == 1)
	{
		$user = mysql_fetch_assoc($resset);
		
		$_SESSION['id'] = $user['id'];
		$_SESSION['name'] = $user['name'];
		$_SESSION['auth'] = 1;
		
		header("Location:showoff.php");
		exit();
	}
	
else
	{
		header("Location:index.php?msg=Username/password field incorrect.");
		exit();
	}


?>