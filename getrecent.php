<?php

include "connection.php";

$query = "select u.name, a.id, a.dos, a.callflag, a.title, a.text, a.magazined from articles as a inner join user as u on a.uid = u.id where datediff(now(),dos) < 2";

$ressetarticle = mysql_query($query);

$rating = 0;

if (mysql_num_rows($ressetarticle) == 0)
	{
		echo "<p class=\"none\">No articles submitted in the last 2 days</p>";
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
		$dos = $row['dos'];
		$sid = $row['id'];
			
echo <<< EOT

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
		<a href=viewer.php?id=$sid>View article</a>
		
EOT;
			
	}


/*

<span class="title">Dropbox mastery</span> 
					<br><br>
					<span class="when">submitted by skun on 12/12/2012</span>
					<span class="rating">Rated by 3 people</span>
					<span class="commit">Committed</span>
					<span class="magyes">Magazined!</span>
					<hr /> 
					<span class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lacinia porttitor tellus nec cursus. Suspendisse pellentesque, 
						ipsum eget rhoncus ultrices, lorem justo venenatis libero, sit amet commodo lacus nibh eu dolor. Duis at tortor vel odio ullamcorper sodales. 
						Etiam a urna sapien, id mattis mi. Mauris non consequat nibh. Donec. </span> 
					<br><br>
					<a href="#">View article</a>

*/
?>

