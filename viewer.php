<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://w3.org/TR/xhtml1-transitional.dtd">

<head>
	
	<?php
	
//TESTING GIT
	include "dontplay.php";
	
	$name = $_SESSION['name'];
	
	?>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Pc Friend CMS | View Article</title>
	
	<link rel="stylesheet" type="text/css" href="css/viewer.css" />
	<link rel="stylesheet" type="text/css" href="css/common.css" />
	<link rel="stylesheet" type="text/css" href="css/forms.css" />
</head>

<body>
	
	<div id="line"></div>
	
	<div id="carea">
	
		<div id="header">
			
			<p class="title">Article Viewer</p>
			
			<?php include "nav.php" ?>
			
		</div>
		
			<div style="clear:both"></div>
			
			<div id ="article-details">
			
				<?php include "getarticle.php" ?>
				<br><br>
				<a href="articleshout.php" target="_new">Shout at this article</a>
			</div>
			
			<div id="ratings">
			<?php $rate = getRating(); ?>

				<form name="ratedata" method="POST" action = "rater.php?id=<?php echo $_REQUEST['id']; ?>">

					<input type="radio" name="rate" value="1" id="rate" <?php if ($rate == 1) echo "checked"; ?> /><img src="images/star.png" /><br>
					<input type="radio" name="rate" value="2" id="rate" <?php if ($rate == 2) echo "checked"; ?>/><img src="images/star.png" /><img src="images/star.png" /><br>
					<input type="radio" name="rate" value="3" id="rate" <?php if ($rate == 3) echo "checked"; ?> /><img src="images/star.png" /><img src="images/star.png" /><img src="images/star.png" /><br>
					<input type="radio" name="rate" value="4" id="rate" <?php if ($rate == 4) echo "checked"; ?>/><img src="images/star.png" /><img src="images/star.png" /><img src="images/star.png" /><img src="images/star.png" /><br>
					<input type="radio" name="rate" value="5" id="rate" <?php if ($rate == 5) echo "checked"; ?>/><img src="images/star.png" /><img src="images/star.png" /><img src="images/star.png" /><img src="images/star.png" /><img src="images/star.png" /><br>
					<br><br>
					<input type="submit" class="sbutton" value="rate it!"/>

				</form>
				
				
			</div>
				
		
	</div>
	
	
	
</body>

</html>
