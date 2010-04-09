<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://w3.org/TR/xhtml1-transitional.dtd">

<head>
	
	<?php
	
	include "dontplay.php";
	
	$name = $_SESSION['name'];
	
	?>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Recent Shouts</title>
	
	<link rel="stylesheet" type="text/css" href="css/listshouts.css" />
	<link rel="stylesheet" type="text/css" href="css/common.css" />
</head>

<body>
	
	<div id="line"> </div>
	
	<div id="carea">
	
		<div id="header">
			
			<p class="title">Recent Shouts</p>
			
			<?php include("nav.php"); ?>
 				
		</div>
		
		
		
		<div style="clear:both"> </div>
		
		<br>
		<br>
		
		<ul class="newshouts">
			
			<a href="#">
			<li>
				<img src="images/new.png" alt="new message" />
				 Shout on 
					<span class="on">Hello World</span> 
					by <span class="who">Terry</span> 
					at <span class="when">10:30 pm, 11th March 2010</span> 
					~ 
					<span class="content">"Lorem ipsum dolor sit amet, consectetur adipiscing ...."</span>
			</li>
			</a>
			
			<a href="#">
			<li>
				<img src="images/new.png" alt="new message" />
				Shout on 
					<span class="on">World</span> 
					by <span class="who">Sham</span> 
					at <span class="when">1:30 pm, 15th March 2010</span> 
					~ 
					<span class="content">"Lorem ipsum dolor sit amet, consectetur adipiscing elit...."</span>
			</li>
			</a>
			
			

		</ul>
		
		<br>
		<p class="separator">~</p>
		<br>
		
		<ul class="oldshouts">
			
			<a href="#">
			<li>
				<img src="images/old.png" alt="new message" />
				Shout on 
					<span class="on">World</span> 
					by <span class="who">Sham</span> 
					at <span class="when">1:30 pm, 15th March 2010</span> 
					~ 
					<span class="content">"Lorem ipsum dolor sit amet, consectetur adipiscing elit...."</span>
			</li>
			</a>
			
			<a href="#">
			<li>
				<img src="images/old.png" alt="new message" />
				 Shout on 
					<span class="on">Hello World</span> 
					by <span class="who">Terry</span> 
					at <span class="when">10:30 pm, 11th March 2010</span> 
					~ 
					<span class="content">"Lorem ipsum dolor sit amet, consectetur adipiscing ...."</span>
			</li>
			</a>
				
			<a href="#">
			<li>
				<img src="images/old.png" alt="new message" />
				 Shout on 
					<span class="on">Hello World</span> 
					by <span class="who">Terry</span> 
					at <span class="when">10:30 pm, 11th March 2010</span> 
					~ 
					<span class="content">"Lorem ipsum dolor sit amet, consectetur adipiscing ...."</span>
			</li>
			</a>
				
			<a href="#">
			<li>
				<img src="images/old.png" alt="new message" />
				 Shout on 
					<span class="on">Hello World</span> 
					by <span class="who">Terry</span> 
					at <span class="when">10:30 pm, 11th March 2010</span> 
					~ 
					<span class="content">"Lorem ipsum dolor sit amet, consectetur adipiscing ...."</span>
			</li>
			</a>
				
			<a href="#">
			<li>
				<img src="images/old.png" alt="new message" />
				 Shout on 
					<span class="on">Hello World</span> 
					by <span class="who">Terry</span> 
					at <span class="when">10:30 pm, 11th March 2010</span> 
					~ 
					<span class="content">"Lorem ipsum dolor sit amet, consectetur adipiscing ...."</span>
			</li>
			</a>
				
			<a href="#">
			<li>
				<img src="images/old.png" alt="new message" />
				 Shout on 
					<span class="on">Hello World</span> 
					by <span class="who">Terry</span> 
					at <span class="when">10:30 pm, 11th March 2010</span> 
					~ 
					<span class="content">"Lorem ipsum dolor sit amet, consectetur adipiscing ...."</span>
			</li>
			</a>
				
			<a href="#">
			<li>
				<img src="images/old.png" alt="new message" />
				 Shout on 
					<span class="on">Hello World</span> 
					by <span class="who">Terry</span> 
					at <span class="when">10:30 pm, 11th March 2010</span> 
					~ 
					<span class="content">"Lorem ipsum dolor sit amet, consectetur adipiscing ...."</span>
			</li>
			</a>
				

			
		</ul>
		
	</div>
	
</body>

</html>