<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://w3.org/TR/xhtml1-transitional.dtd">

<head>
	
	<?php
	

	include "dontplay.php";
	
	$name = $_SESSION['name'];
	
	?>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Pc Friend CMS | <?php echo $name ?>'s  Dashboard</title>
	
	<link rel="stylesheet" type="text/css" href="css/dashboard.css" />
	<link rel="stylesheet" type="text/css" href="css/dabbas.css" />
	<link rel="stylesheet" type="text/css" href="css/common.css" />
</head>

<body>
	
	<div id="line"></div>
	
	<div id="carea">
	
		<div id="header">
			
			<p class="title">Welcome <?php echo $name ?></p>
			
			<?php include "nav.php" ?>
			
		</div>
		
		<div style="clear:both"> </div>
		
		<a href="listshouts.php" class="shout"><p class="shoutnotifications">You have <span>3</span> new shouts...</p></a>
		
		<p class="recent">~Recently posted articles~</p>
		
		<div id="dabbas">
			
			<ul>
				<?php
				
				include "dashboardget.php";
				
				?>
				
				
				<li class="more">
					<a href="browse.php?month=all&pipo=all" class="more"><p align=center>To browse articles older than 2 days, click here</p></a>
				</li>
				
				
			</ul>
			
		</div>
		
		
	</div>
	
</body>

</html>