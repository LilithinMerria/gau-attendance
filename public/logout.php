<?php
	session_start();
	require 'connect.php';
	if(isset($_SESSION['email'])){
		session_unset();	//removes all session variables
		session_destroy(); //destroys a users session
		header('Location: index.php');
	}else if(isset($_SESSION['studentuser'])){
		session_unset(); 
		session_destroy(); 
		header('Location: index.php');
	}
	else if(isset($_SESSION['admin'])){
		session_unset(); 
		session_destroy(); 
		header('Location: index.php');
	}
	else{
		header('Location: index.php');
	}
?>