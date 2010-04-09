<?php

session_start();

include "connection.php";

$id = $_SESSION['id'];

$title = $_POST['title'];
$txt = $_POST['text'];

$query = "insert into articles values(null,$id,'$title','$txt','asdf',1,now(),0)";

mysql_query($query) or die(mysql_error());

header("Location:articlesubmit.php?msg=Article Successfully submitted.")

?>