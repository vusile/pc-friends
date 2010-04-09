<?php

include "connection.php";

$query = "select u.name, a.id, date(a.dos) as dos, a.callflag, a.title, a.text, a.magazined from articles as a inner join user as u on a.uid = u.id where datediff(now(),dos) < 2 order by a.dos desc";

$ressetarticle = mysql_query($query);

$rating = 0;

if (mysql_num_rows($ressetarticle) == 0)
	{
		echo "<li><p class=\"none\">No articles submitted in the last 2 days</p></li>";
		return;	
	}
	
while ($row = mysql_fetch_assoc($ressetarticle))
	{
		$query = "select count(*) as noofratings from ratings where id = " + $row['id'];
		
		if($rateresset = mysql_query($query))
			{
				$rrow = mysql_fetch_assoc($rateresset);
				$rating = $rrow['noofratings'];
			}
			
		else
			$rating = 0;
		
		
		if ($row['callflag'] == 0)
			{
				$commitattribute="pdf";
				$committext="PDF not attached";
			}
			
		else
			{
				$commitattribute="commit";
				$committext="committed";
			}
			
		if ($row['magazined'] == 0)
			{
				$magattribute = "magno";
				$magtext = "Not magazined";
			}
			
		else
			{
				$magattribute = "magyes";
				$magtext = "Magazined";
			}
			
		if (strlen($row['text']) > 500)
			$trunctext = substr($row['text'], 0, 500)."...";
		else
			$trunctext = $row['text'];
			
		//$trunctext = nl2br($trunctext);
		
		$title = $row['title'];
		$name = $row['name'];
		
		$dos = date("j-m-Y", strtotime($row['dos']));
		
		$sid = $row['id'];
			
echo <<< DASHBOARD

		<li>
		<span class=title>$title</span>
		<br><br>
		<span class=when>submitted by $name on $dos</span> 
		<span class=rating>Rated by $rating people</span> 
		<span class=$commitattribute>$committext</span> 
		<span class=$magattribute>$magtext</span> 
		<hr />
		<span class=text>$trunctext</span> 
		<br/><br/>
		<a class="link" href=viewer.php?id=$sid>View article</a>
		</li>
DASHBOARD;
			
	}
?>

