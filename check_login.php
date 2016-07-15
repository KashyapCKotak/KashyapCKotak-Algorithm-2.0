<?php
	session_start();
	if(isset($_SESSION['login_user'])){
		if(isset($_GET["logout"])){
			session_destroy();
			unset($_SESSION['login_user']);
			header("Location: login.php");	
		}
	}else
		header("Location: login.php");
?>