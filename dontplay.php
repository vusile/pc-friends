<?php

	@session_start();
	
	if (!isset($_SESSION['auth']))
		{
			header("Location:index.php?msg=Don't Play with me");
			exit();
		}

?>