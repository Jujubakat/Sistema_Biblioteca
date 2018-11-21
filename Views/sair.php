<?php
	session_start();
	$_SESSION['email'] = null;
	$_SESSION['nome'] = null;
	header('location:../index.php');
?>