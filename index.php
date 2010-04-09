	<?php
	
	@session_start();
	
	if (isset($_SESSION['auth']))
		{
			header("location:showoff.php");
		}

	?>
	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://w3.org/TR/xhtml1-transitional.dtd">
<html>

<head>
			

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Pc Friend CMS | Index</title>
	
	<link rel="stylesheet" type="text/css" href="css/common.css" />
	<link rel="stylesheet" type="text/css" href="css/forms.css" />
	<link rel="stylesheet" type="text/css" href="css/index.css" />
	
</head>

<body onLoad="javascript:document.data.uname.focus();">
	
	<div id="redline"></div>
	
	<div id="carea">
	
		<div id="header">
			
			<p class="title">Pc Friend Cms</p>
			
			<ul id="nav">
				<li><a href="index.php">Home</a></li>
				<!--<li><a href="#">About us</a></li>-->
			</ul>
			
		</div>
		
		<div style="clear:both"> </div>
		
		<div id="login">
			
			<form name="data" method="POST" action="login.php">
				
					<input type="text" name="uname" class="form"/>
					<br>
					<br>
					<input type="password" name="pass" class="form" />
					<br>
					<br>
					<input type="submit" value="Login" class="sbutton"/>
					
			</form>
			
		</div>
		
		<div id="oops">
			<?php
			
				//$message = $_REQUEST['msg'];
				
				if (isset($_REQUEST['msg']))
					{
						$message = $_REQUEST['msg'];
						
						echo "<p>$message</p>";
					}
			
			?>
		</div>
		
		<hr />
		<p class="props">"If you found this page all by yourself - We give you props. Drop in a mail and we'll talk"</p>
		<hr />
		
	</div>
</body>

</html>