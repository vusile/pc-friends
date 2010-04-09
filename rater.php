<?php
	include "dontplay.php";
	include "connection.php";
        $id = $_REQUEST['id'];
	$chkRatingQry = "select * from ratings where uid = ".$_SESSION['id']." and sid = ".$_REQUEST['id'];
	$chkRatingRes = mysql_query($chkRatingQry);
	if(mysql_num_rows($chkRatingRes)==0)
	{
          $insrtRatingQry = "insert into ratings values (NULL, ".$_SESSION['id'].", ".$_REQUEST['id'].",".$_POST['rate'].")";
          $insrtRatingRes = mysql_query($insrtRatingQry);
          if(mysql_affected_rows()==1)
            header("location:viewer.php?id=$id");
        }

        else
        {
          $updRatingQry = "update ratings set rating = ".$_POST['rate']." where uid = ".$_SESSION['id']." and sid = ".$_REQUEST['id'];
          $updRatingRes = mysql_query($updRatingQry);
          if(mysql_affected_rows()==1)
            header("location:viewer.php?id=$id");
        }
?>