<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://w3.org/TR/xhtml1-transitional.dtd">

<head>
	
	<?php
	
	include "dontplay.php";
	
	$name = $_SESSION['name'];
	
	?>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PFCms | Todo</title>
	
	<link rel="stylesheet" type="text/css" href="css/todo.css" />
	<link rel="stylesheet" type="text/css" href="css/common.css" />
</head>

<body>
	
	<div id="line"> </div>
	
	<div id="carea">
	
		<div style="clear:both"> </div>
		
		<table border="0" cellspacing="10">
			
			<tr class="done">
				<td>
					<a href="dashboard.php" target="_new">Dashboard</a>
				</td>
				<td>
					Shrayas
				</td>
				<td>
					Done
				</td>
			</tr>
			
			<tr class="pending">
				<td>
					<a href="submit.php" target="_new">Submit</a>
				</td>
				<td>
					Shrayas
				</td>
				<td>
					Validation Pending
				</td>
			</tr>
			
			<tr class="done">
				<td>
					<a href="browse.php" target="_new">Browse</a>
				</td>
				<td>
					Shrayas
				</td>
				<td>
					Done
				</td>
			</tr>
			
			<tr class="done">
				<td>
					View + Rate
				</td>
				<td>
					Terry
				</td>
				<td>
					Done
				</td>
			</tr>
			
			<tr class="pending">
				<td>
					Shouts
				</td>
				<td>
					Terry
				</td>
				<td>
					Process started
				</td>
			</tr>
			
			<tr class="yet">
				<td>
					Users + PMs
				</td>
				<td>
					Jerry
				</td>
				<td>
					Yet to start
				</td>
			</tr>
			
			<tr class="yet">
				<td>
					My Articles
				</td>
				<td>
					Shrayas
				</td>
				<td>
					Yet to start
				</td>
			</tr>
						
			
		</table>
		
	</div>
	
</body>

</html>