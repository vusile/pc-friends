<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://w3.org/TR/xhtml1-transitional.dtd">

<head>
	
	<?php
	
	include "dontplay.php";
	
	$name = $_SESSION['name'];
	
	?>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Shouts!</title>
	
	<link rel="stylesheet" type="text/css" href="css/shout.css" />
	<link rel="stylesheet" type="text/css" href="css/common.css" />
	<link rel="stylesheet" type="text/css" href="css/forms.css" />
</head>

<body onLoad="javascript:document.shoutdata.text.focus();">
	
	<div id="line"> </div>
	
	<div id="carea">
	
		<div id="header">
			
			<p class="title">Shout!</p>
 				
		</div>
		
		<div style="clear:both"> </div>
		
		<div id="shout">
			
			<p class="article">"Dropbox Demystrified"</p>
			
			<form name="shoutdata">
				
				<textarea rows="10" cols="100" class="form" name="text"></textarea>
				<br><br>
				<input type="submit" value="Shout!" class="sbutton"/>
				
				
			</form>
			
		</div>
		
	</div>
	
</body>

</html>