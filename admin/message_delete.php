<?php 
	require 'connection.php';
	$id=$_GET['id'];
	$query=mysqli_query($connect,"DELETE FROM pengaduan WHERE id_pengaduan=$id");
	header("location:message.php");
?>