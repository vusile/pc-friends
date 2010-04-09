<?php

function Get($month, $person)
	{
		include "connection.php";
		
		$where = 0;
		
		$andclause = "";
		
		$query = "select u.name, a.id, date(a.dos) as dos,  a.title, a.magazined from articles as a inner join user as u on a.uid = u.id";
		
		if ($month == "all")
			{
				$monthwhere = "";
			}
		
		else
			{
				$where++;
				$monthwhere = " month(a.dos) = $month ";
			}
			
		if ($person == "all")
			{
				$personwhere = "";	
			}
		
		else
			{
				$where++;
				$personwhere = " u.id = (select id from user where name = '$person') ";
			}
			
		if ($where > 1)
			$andclause = "and";
			
		if ($where > 0)
			$query = $query . " where " . $monthwhere . $andclause . $personwhere;
			
		$query = $query . " order by a.dos desc";
			
		$ressetarticle = mysql_query($query);
		
		$rating = 0;
		
		if (mysql_num_rows($ressetarticle) == 0)
		{
			echo "<li><p class=\"none\">No articles found with the filters applied</p></li>";
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
		<span class=$magattribute>$magtext</span> 
		<a class="link" href=viewer.php?id=$sid>View article</a>
		
DASHBOARD;
			
		}
		
				/*
		<li>
					
					<span class="title">Dropbox Demysterified</span>
					<br><br>
					<span class="when">Submitted by Skun on 21-03-2010</span> 
					<span class="magno">Not magazined</span>
					<a href="#">Visit Article</a>
					
				</li>
					*/
	}

?>