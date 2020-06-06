<?php 

session_start(); 
if(!isset($_SESSION['email']) && !isset($_SESSION['admin'])){
	header('Location: index.php');
	}


 ?>