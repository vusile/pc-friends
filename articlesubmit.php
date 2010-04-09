<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://w3.org/TR/xhtml1-transitional.dtd">

<head>
	
	<?php
		
	include "dontplay.php";
		
	$name = $_SESSION['name'];
	
	?>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Pc Friend CMS | <?php echo $name ?> | Submit new article</title>
	
	<link rel="stylesheet" type="text/css" href="css/article.css" />
	<link rel="stylesheet" type="text/css" href="css/common.css" />
	<link rel="stylesheet" type="text/css" href="css/forms.css" />
</head>

<body onLoad="javascript:document.dataform.title.focus();">
	
	<div id="line"></div>
	
	<div id="carea">
	
		<div id="header">
			
			<p class="title">Submit an Article</p>
			
			<?php include "nav.php" ?>
			
		</div>
		
		<div style="clear:both"> </div>
		
		<div id="data">
			
				<?php
				
				if (isset($_REQUEST['msg']))
					{
						$msg = $_REQUEST['msg'];
				
						echo "<p>$msg</p>";
					}

				?>
				
			<form name="dataform" action="submit.php" method="POST">
				
				<input type="text" class="form" size="120" name="title"/>
				<br><br>
				<br>
				<textarea rows="50" cols="100" class="form" name="text"></textarea>
				<!--<input type="file" size="120" name="title"/>-->
				<br>
				<br>
				<input type="submit" value="Submit Article" class="sbutton" />
				<input type="reset" value="Clear" class="sbutton" onClick="javascript:document.dataform.title.focus();"/>
				
			</form>
			
		</div>
		
		
	</div>
	
</body>

</html>