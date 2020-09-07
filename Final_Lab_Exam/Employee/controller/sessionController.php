<?php

	session_start();
	if(!isset($_SESSION['username']) && !isset($_SESSION['name']) && !isset($_SESSION['contact']) ){
		header("location: ../views/login.php?error=invalid_request");
	}

?>