<?php



include "connection.php";

function getRating()
{
  $getRatingQry = "select rating from ratings where uid = ".$_SESSION['id']." and sid = ".$_REQUEST['id'];
  $getRatingRes = mysql_query($getRatingQry);
  if(mysql_num_rows($getRatingRes)==0)
     return(0);
  else
     {
       $rating = mysql_fetch_row($getRatingRes);
       return $rating[0];
     }

}

function avgRating($artId)
{
   $ratingQuery = "select sum(rating) as ratings, count(rating) as raters from ratings where sid = $artId";
   $ratingRes = mysql_query($ratingQuery);
   $rating = mysql_fetch_array($ratingRes);
   if($rating['raters'] == 0)
	return (0);
   else
   	return($rating['ratings']/$rating['raters']);
 
}


$articleQuery = "select a.*,u.name from articles as a, user as u where a.id = ".$_REQUEST['id']." and u.id = a.uid";

$articleRes = mysql_query($articleQuery);
if (mysql_num_rows ($articleRes) == 0)
	echo "<li><p class=\"none\">Article has been moved or deleted</p></li>";
else
{
$article = mysql_fetch_array($articleRes);
$title = $article['title'];
$name = $article['name'];
$dos = date("j-m-Y", strtotime($article['dos']));
$text = $article['text'];
$artId = $_REQUEST['id'];
$avgRating = avgRating($artId);

echo <<< VIEWER

<span class="title">$title</span>
<br><br>
<span class="who">$name</span>
<span class="when">Submitted on  $dos</span>
<span class="rating">Average rating: $avgRating</span>
<br>
<br>
<span class="txt">$text</span>


VIEWER;
}


?>
