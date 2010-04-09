<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://w3.org/TR/xhtml1-transitional.dtd">

<head>
	
	<?php
	
	include "dontplay.php";
	
	$name = $_SESSION['name'];
	
	?>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Pc Friend CMS | <?php echo $name ?>'s  Dashboard</title>
	
	<link rel="stylesheet" type="text/css" href="css/showoff.css" />
	<link rel="stylesheet" type="text/css" href="css/common.css" />
	
	<script type="text/javascript" charset="utf-8">
		<!--
			function popup(url) 
			{
			 var width  = 900;
			 var height = 400;
			 var left   = (screen.width  - width)/2;
			 var top    = (screen.height - height)/2;
			 var params = 'width='+width+', height='+height;
			 params += ', top='+top+', left='+left;
			 params += ', directories=no';
			 params += ', location=no';
			 params += ', menubar=no';
			 params += ', resizable=no';
			 params += ', scrollbars=no';
			 params += ', status=no';
			 params += ', toolbar=no';
			 newwin=window.open(url,'windowname5', params);
			 if (window.focus) {newwin.focus()}
			 return false;
			}
// -->

	</script>
	
	
</head>

<body>
	
	<div id="line"> </div>
	
	<div id="carea">
	
		<div id="header">
			
			<p class="title">Interface Central</p>
 				
		</div>
		
		<div style="clear:both"> </div>
		
		<p class="recent">~Show Off~</p>
		
		<div id="showoff">
				<a href="dashboard.php">Dashboard</a>
				<a href="articlesubmit.php">Submit</a>
				<a href="browse.php">Browse</a>
				<a href="#">Shouts</a>
				<a href="#">Users</a>
				<a href="#">My Articles</a>
				<a href="javascript: void(0)" onclick="popup('todo.php')">Project Management</a>
				<a href="logout.php" class="spl">Logout</a>
		</div>
		
				
		
	</div>
	
</body>

</html>