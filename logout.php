<?php
	require 'connect.php';
	unset($_SESSION['password']);
	unset($_SESSION['user_name']); 
	unset($_SESSION['id']);
	header('Location: index.php');
?>