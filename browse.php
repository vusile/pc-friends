<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://w3.org/TR/xhtml1-transitional.dtd">

<head>
	
	<?php
		
	include "dontplay.php";
		
	$name = $_SESSION['name'];
	
	?>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Pc Friend CMS | browse articles</title>
	
	<link rel="stylesheet" type="text/css" href="css/browse.css" />
	<link rel="stylesheet" type="text/css" href="css/common.css" />
	<link rel="stylesheet" type="text/css" href="css/forms.css" />
	<link rel="stylesheet" type="text/css" href="css/dabbas.css" />
	
	<script type="text/javascript" charset="utf-8">
		
		function doreset()
		{
			window.location="browse.php?";
		}
	
		function redirect()
		{
			var mon = trim(document.dataform.months.value);
			var pipo = trim(document.dataform.pipo.value);
			
			var all = false;
			
			var count = 0;
			
			if (mon == "--")
			{
				count++;
				mon="all";
			}
			
			if (pipo == "--")
			{
				count++;
				pipo="all";
			}
			
			if (count == 2)
				all = true;
					
			if (all == true)
				{
					mon="all";
					pipo="all";
				}
				
			window.location="browse.php?month="+mon+"&pipo="+pipo;
		}
	</script>
	
	<script src="js/trims.js" type="text/javascript"></script>
	
</head>

<body>
	
	<div id="line"></div>
	
	<div id="carea">
	
		<div id="header">
			
			<p class="title">Browse Articles</p>
			
			<?php include "nav.php" ?>
			
		</div>
		
		<div style="clear:both"> </div>
		
		<div id="filters">
			
			<h4>~Filters~</h4>
			
			<form name="dataform" action="artsubmit.php" method="POST">
				
				<select class="form" name="months">
					
					<option value="all">&nbsp;&nbsp;--&nbsp;&nbsp;</option> <!-- 2 spaces before and after required! -->
					<option value="1">&nbsp;&nbsp;January&nbsp;&nbsp;</option> 
					<option value="2">&nbsp;&nbsp;Febuary&nbsp;&nbsp;</option> 
					<option value="3">&nbsp;&nbsp;March&nbsp;&nbsp;</option> 
					<option value="4">&nbsp;&nbsp;April&nbsp;&nbsp;</option> 
					<option value="5">&nbsp;&nbsp;May&nbsp;&nbsp;</option> 
					<option value="6">&nbsp;&nbsp;June&nbsp;&nbsp;</option> 
					<option value="7">&nbsp;&nbsp;July&nbsp;&nbsp;</option> 
					<option value="8">&nbsp;&nbsp;August&nbsp;&nbsp;</option>
					<option value="9">&nbsp;&nbsp;September&nbsp;&nbsp;</option> 
					<option value="10">&nbsp;&nbsp;October&nbsp;&nbsp;</option> 
					<option value="11">&nbsp;&nbsp;November&nbsp;&nbsp;</option> 
					<option value="12">&nbsp;&nbsp;December&nbsp;&nbsp;</option> 
					
				</select>
				
				<select class="form" name="pipo">
					
					<option>&nbsp;&nbsp;--&nbsp;&nbsp;</option> <!-- 2 spaces before and after required! -->
					
					<?php
					include "connection.php";
					
					$query = "select name from user where name <> 'admin' and name <> 'minion' order by name";
					
					$resset = mysql_query($query);
					
					if (!$resset) 
						echo "<option>&nbsp;&nbsp;".mysql_error()."&nbsp;&nbsp;</option>";
					
					while ($user = mysql_fetch_assoc($resset))
						{
							echo "<option>&nbsp;&nbsp;".$user['name']."&nbsp;&nbsp;</option>";
						}
					?>
					
				</select>
				
				<input type="button" name="showallbutton" value="Show" class="button" onClick="redirect()"/>
				<input type="button" name="resetbutton" value="Reset" class="button" onClick="doreset()"/>
				
				<hr />
				
			</form>
			
		</div>
		
		<div id="data">
			
			<?php
			
			if (!isset($_REQUEST['month']) || !isset($_REQUEST['month']))
				return;
			
			$mon = $_REQUEST['month'];
			$pipo = $_REQUEST['pipo'];
			
			$month = "";

			switch($mon)
				{
					case 0:
							$month="all";
							break;							
					case 1:
							$month = "January";
							break;
					case 2:
							$month = "Febuary";
							break;
					case 3:
							$month = "March";
							break;
					case 4:
							$month = "April";
							break;
					case 5:
							$month = "May";
							break;
					case 6:
							$month = "June";
							break;
					case 7:
							$month = "July";
							break;
					case 8:
							$month = "August";
							break;
					case 9:
							$month = "September";
							break;
					case 10:
							$month = "October";
							break;
					case 11:
							$month = "November";
							break;
					case 12:
							$month = "December";
							break;	
					default:
							$month="all";
							break;			
				}
				
			echo "<h4>Filters [Month: ".$month." , People: $pipo]</h4>";
			
			echo "<hr />";
			
			?>
			
			<div id="dabbas">
			
			<ul>
				<?php
				
				include "browseget.php";
				
				Get($mon,$pipo);
				
				?>
			</ul>
			
			</div>
			
		</div>
		
		
	</div>
	
</body>

</html>